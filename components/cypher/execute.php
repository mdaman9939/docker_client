<?php
/**
 * Cypher - Code Execution Engine
 * Primary: Online execution via Wandbox API (no server-side runtimes needed)
 * Fallback: Local runtimes if available and Wandbox is unreachable
 */

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit();
}

// Read request
$input = file_get_contents('php://input');
$data = json_decode($input, true);

if (!$data || !isset($data['language']) || !isset($data['files'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid request. Required: language, files']);
    exit();
}

$language = $data['language'];
$code = $data['files'][0]['content'] ?? '';
$stdin = $data['stdin'] ?? '';
$timeout = min((int)($data['run_timeout'] ?? 10000), 15000); // ms
$timeoutSec = max(1, intval($timeout / 1000));

// ===== Wandbox API Compiler Mapping =====
// Maps our language names to Wandbox compiler identifiers
$wandboxCompilers = [
    'python'     => 'cpython-3.12.7',
    'javascript' => 'nodejs-20.17.0',
    'typescript' => 'typescript-5.6.2',
    'php'        => 'php-8.3.12',
    'c'          => 'gcc-13.2.0-c',
    'c++'        => 'gcc-13.2.0',
    'java'       => 'openjdk-jdk-22+36',
    'bash'       => 'bash',
    'ruby'       => 'ruby-3.4.1',
    'go'         => 'go-1.23.2',
    'rust'       => 'rust-1.82.0',
    'perl'       => 'perl-5.42.0',
    'lua'        => 'lua-5.4.7',
    'sql'        => 'sqlite-3.46.1',
];

// Check if language is supported
if (!isset($wandboxCompilers[$language])) {
    http_response_code(400);
    echo json_encode([
        'error' => "Language '$language' is not supported.",
        'supported' => array_keys($wandboxCompilers),
    ]);
    exit();
}

// ===== Try Wandbox API first (online execution) =====
$result = executeWandbox($language, $code, $stdin, $wandboxCompilers);

if ($result !== null) {
    http_response_code(200);
    echo json_encode($result);
    exit();
}

// ===== Fallback: Local execution =====
$runtimes = detectRuntimes();
$localResult = executeLocal($language, $code, $stdin, $timeoutSec, $runtimes);

if ($localResult !== null) {
    http_response_code(200);
    echo json_encode($localResult);
    exit();
}

// Both methods failed
http_response_code(200);
echo json_encode(errorResult("Unable to execute $language code. Online API is unreachable and no local runtime is installed."));
exit();


// =====================================================
// WANDBOX API EXECUTION
// =====================================================

/**
 * Execute code via Wandbox API (wandbox.org)
 * Free, no API key required, supports all major languages
 * Returns result array on success, null on failure
 */
function executeWandbox($language, $code, $stdin, $wandboxCompilers) {
    $apiUrl = 'https://wandbox.org/api/compile.json';

    $compiler = $wandboxCompilers[$language];
    $codeToSend = $code;

    // Java workaround: Wandbox uses 'prog.java' as filename,
    // so 'public class Main' causes error. Remove 'public' from the main class.
    if ($language === 'java') {
        $codeToSend = preg_replace('/public\s+(class\s+\w+)/', '$1', $codeToSend, 1);
    }

    $payload = [
        'code'     => $codeToSend,
        'compiler' => $compiler,
        'stdin'    => $stdin ?? '',
    ];

    $jsonPayload = json_encode($payload);

    $ch = curl_init($apiUrl);
    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $jsonPayload,
        CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_CONNECTTIMEOUT => 5,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => 0,
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // If cURL failed or non-200 response, return null to trigger fallback
    if ($response === false || $httpCode !== 200) {
        return null;
    }

    $data = json_decode($response, true);
    if (!$data) {
        return null;
    }

    // Extract version from compiler name (e.g., 'cpython-3.12.7' -> '3.12.7')
    $version = $compiler;
    if (preg_match('/[\d]+\.[\d]+[\.\d]*/i', $compiler, $m)) {
        $version = $m[0];
    }

    // Wandbox response format:
    // status: "0" = success, non-zero = error
    // compiler_error: compilation errors
    // program_output: stdout
    // program_error: stderr (runtime errors)
    $hasCompileError = !empty($data['compiler_error']);
    $compileExitCode = $hasCompileError && empty($data['program_output']) ? 1 : 0;

    $result = [
        'language' => $language,
        'version'  => $version,
        'run'      => [
            'stdout' => $data['program_output'] ?? '',
            'stderr' => $data['program_error'] ?? '',
            'code'   => (int)($data['status'] ?? 0),
            'signal' => !empty($data['signal']) ? $data['signal'] : null,
        ]
    ];

    // Include compile info for compiled languages
    $compiledLanguages = ['c', 'c++', 'java', 'rust', 'go', 'typescript'];
    if (in_array($language, $compiledLanguages)) {
        $result['compile'] = [
            'stdout' => $data['compiler_output'] ?? '',
            'stderr' => $data['compiler_error'] ?? '',
            'code'   => $compileExitCode,
        ];
    }

    return $result;
}


// =====================================================
// LOCAL EXECUTION (FALLBACK)
// =====================================================

/**
 * Execute code using local runtimes
 * Returns result array on success, null if runtime not available
 */
function executeLocal($language, $code, $stdin, $timeoutSec, $runtimes) {
    switch ($language) {
        case 'python':
            $cmd = $runtimes['python'] ?? null;
            if (!$cmd) return null;
            return runInterpreted($cmd, 'py', $code, $stdin, $timeoutSec);

        case 'javascript':
            $cmd = $runtimes['node'] ?? null;
            if (!$cmd) return null;
            return runInterpreted($cmd, 'js', $code, $stdin, $timeoutSec);

        case 'typescript':
            $cmd = $runtimes['node'] ?? null;
            if (!$cmd) return null;
            $jsCode = stripTypeScriptTypes($code);
            return runInterpreted($cmd, 'js', $jsCode, $stdin, $timeoutSec);

        case 'php':
            $cmd = $runtimes['php'] ?? null;
            if (!$cmd) return null;
            $result = runInterpreted($cmd . ' -d display_errors=0 -n', 'php', $code, $stdin, $timeoutSec);
            if (!empty($result['run']['stderr'])) {
                $lines = preg_split('/[\r\n]+/', $result['run']['stderr']);
                $filtered = array_filter($lines, function($line) {
                    return !preg_match('/Failed loading.*dll|Xdebug|zend_ext/i', $line);
                });
                $result['run']['stderr'] = implode("\n", $filtered);
            }
            return $result;

        case 'c':
            $gcc = $runtimes['gcc'] ?? null;
            if (!$gcc) return null;
            return runCompiled($gcc, 'c', $code, $stdin, $timeoutSec);

        case 'c++':
            $gpp = $runtimes['g++'] ?? null;
            if (!$gpp) return null;
            return runCompiled($gpp, 'cpp', $code, $stdin, $timeoutSec);

        case 'java':
            $javac = $runtimes['javac'] ?? null;
            $java = $runtimes['java'] ?? null;
            if (!$javac || !$java) return null;
            return runJava($javac, $java, $code, $stdin, $timeoutSec);

        case 'bash':
            $bash = $runtimes['bash'] ?? null;
            if (!$bash) return null;
            return runInterpreted($bash, 'sh', $code, $stdin, $timeoutSec);

        case 'ruby':
            $cmd = $runtimes['ruby'] ?? null;
            if (!$cmd) return null;
            return runInterpreted($cmd, 'rb', $code, $stdin, $timeoutSec);

        case 'go':
            $cmd = $runtimes['go'] ?? null;
            if (!$cmd) return null;
            return runGo($cmd, $code, $stdin, $timeoutSec);

        case 'rust':
            $cmd = $runtimes['rustc'] ?? null;
            if (!$cmd) return null;
            return runRust($cmd, $code, $stdin, $timeoutSec);

        case 'perl':
            $cmd = $runtimes['perl'] ?? null;
            if (!$cmd) return null;
            return runInterpreted($cmd, 'pl', $code, $stdin, $timeoutSec);

        case 'lua':
            $cmd = $runtimes['lua'] ?? null;
            if (!$cmd) return null;
            return runInterpreted($cmd, 'lua', $code, $stdin, $timeoutSec);

        case 'sql':
            $cmd = $runtimes['sqlite3'] ?? null;
            if (!$cmd) return null;
            return runInterpreted($cmd, 'sql', $code, $stdin, $timeoutSec);

        default:
            return null;
    }
}


// =====================================================
// LOCAL EXECUTION FUNCTIONS
// =====================================================

/**
 * Run an interpreted language (Python, Node, PHP, Ruby, etc.)
 */
function runInterpreted($interpreter, $ext, $code, $stdin, $timeoutSec) {
    $tmpDir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'cypher_' . uniqid();
    mkdir($tmpDir, 0755, true);

    $codeFile = $tmpDir . DIRECTORY_SEPARATOR . 'main.' . $ext;
    file_put_contents($codeFile, $code);

    $stdinFile = null;
    if ($stdin !== '') {
        $stdinFile = $tmpDir . DIRECTORY_SEPARATOR . 'stdin.txt';
        file_put_contents($stdinFile, $stdin);
    }

    $cmd = escapeshellarg($interpreter) . ' ' . escapeshellarg($codeFile);
    $result = executeWithTimeout($cmd, $stdinFile, $timeoutSec, $tmpDir);

    // Detect version
    $versionCmd = escapeshellarg($interpreter) . ' --version 2>&1';
    $version = trim(shell_exec($versionCmd) ?? '');
    if (preg_match('/[\d]+\.[\d]+[\.\d]*/i', $version, $m)) {
        $version = $m[0];
    }

    cleanup($tmpDir);

    $langNames = [
        'py' => 'python', 'js' => 'javascript', 'php' => 'php',
        'rb' => 'ruby', 'pl' => 'perl', 'lua' => 'lua', 'sh' => 'bash', 'sql' => 'sql'
    ];

    return [
        'language' => $langNames[$ext] ?? $ext,
        'version' => $version ?: 'local',
        'run' => $result
    ];
}

/**
 * Compile and run C/C++
 */
function runCompiled($compiler, $ext, $code, $stdin, $timeoutSec) {
    $tmpDir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'cypher_' . uniqid();
    mkdir($tmpDir, 0755, true);

    $codeFile = $tmpDir . DIRECTORY_SEPARATOR . 'main.' . $ext;
    $outFile = $tmpDir . DIRECTORY_SEPARATOR . 'main.exe';
    file_put_contents($codeFile, $code);

    $compileCmd = escapeshellarg($compiler) . ' ' . escapeshellarg($codeFile)
        . ' -o ' . escapeshellarg($outFile) . ' 2>&1';

    $compileOutput = shell_exec($compileCmd) ?? '';

    if (!file_exists($outFile)) {
        cleanup($tmpDir);
        return [
            'language' => $ext === 'c' ? 'c' : 'c++',
            'version' => 'local',
            'compile' => ['stdout' => '', 'stderr' => $compileOutput, 'code' => 1],
            'run' => ['stdout' => '', 'stderr' => '', 'code' => 0, 'signal' => null]
        ];
    }

    $stdinFile = null;
    if ($stdin !== '') {
        $stdinFile = $tmpDir . DIRECTORY_SEPARATOR . 'stdin.txt';
        file_put_contents($stdinFile, $stdin);
    }

    $result = executeWithTimeout(escapeshellarg($outFile), $stdinFile, $timeoutSec, $tmpDir);
    cleanup($tmpDir);

    return [
        'language' => $ext === 'c' ? 'c' : 'c++',
        'version' => 'local',
        'compile' => ['stdout' => $compileOutput ?: '', 'stderr' => '', 'code' => 0],
        'run' => $result
    ];
}

/**
 * Compile and run Java
 */
function runJava($javac, $java, $code, $stdin, $timeoutSec) {
    $tmpDir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'cypher_' . uniqid();
    mkdir($tmpDir, 0755, true);

    $className = 'Main';
    if (preg_match('/public\s+class\s+(\w+)/i', $code, $m)) {
        $className = $m[1];
    }

    $codeFile = $tmpDir . DIRECTORY_SEPARATOR . $className . '.java';
    file_put_contents($codeFile, $code);

    $compileCmd = escapeshellarg($javac) . ' ' . escapeshellarg($codeFile) . ' 2>&1';
    $compileOutput = shell_exec($compileCmd) ?? '';

    $classFile = $tmpDir . DIRECTORY_SEPARATOR . $className . '.class';
    if (!file_exists($classFile)) {
        cleanup($tmpDir);
        return [
            'language' => 'java',
            'version' => 'local',
            'compile' => ['stdout' => '', 'stderr' => $compileOutput, 'code' => 1],
            'run' => ['stdout' => '', 'stderr' => '', 'code' => 0, 'signal' => null]
        ];
    }

    $stdinFile = null;
    if ($stdin !== '') {
        $stdinFile = $tmpDir . DIRECTORY_SEPARATOR . 'stdin.txt';
        file_put_contents($stdinFile, $stdin);
    }

    $runCmd = escapeshellarg($java) . ' -cp ' . escapeshellarg($tmpDir) . ' ' . $className;
    $result = executeWithTimeout($runCmd, $stdinFile, $timeoutSec, $tmpDir);
    cleanup($tmpDir);

    return [
        'language' => 'java',
        'version' => 'local',
        'compile' => ['stdout' => '', 'stderr' => $compileOutput ?: '', 'code' => 0],
        'run' => $result
    ];
}

/**
 * Run Go code
 */
function runGo($goBin, $code, $stdin, $timeoutSec) {
    $tmpDir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'cypher_' . uniqid();
    mkdir($tmpDir, 0755, true);

    $codeFile = $tmpDir . DIRECTORY_SEPARATOR . 'main.go';
    file_put_contents($codeFile, $code);

    $stdinFile = null;
    if ($stdin !== '') {
        $stdinFile = $tmpDir . DIRECTORY_SEPARATOR . 'stdin.txt';
        file_put_contents($stdinFile, $stdin);
    }

    $cmd = escapeshellarg($goBin) . ' run ' . escapeshellarg($codeFile);
    $result = executeWithTimeout($cmd, $stdinFile, $timeoutSec, $tmpDir);
    cleanup($tmpDir);

    return [
        'language' => 'go',
        'version' => 'local',
        'run' => $result
    ];
}

/**
 * Compile and run Rust
 */
function runRust($rustc, $code, $stdin, $timeoutSec) {
    $tmpDir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'cypher_' . uniqid();
    mkdir($tmpDir, 0755, true);

    $codeFile = $tmpDir . DIRECTORY_SEPARATOR . 'main.rs';
    $outFile = $tmpDir . DIRECTORY_SEPARATOR . 'main.exe';
    file_put_contents($codeFile, $code);

    $compileCmd = escapeshellarg($rustc) . ' ' . escapeshellarg($codeFile)
        . ' -o ' . escapeshellarg($outFile) . ' 2>&1';
    $compileOutput = shell_exec($compileCmd) ?? '';

    if (!file_exists($outFile)) {
        cleanup($tmpDir);
        return [
            'language' => 'rust',
            'version' => 'local',
            'compile' => ['stdout' => '', 'stderr' => $compileOutput, 'code' => 1],
            'run' => ['stdout' => '', 'stderr' => '', 'code' => 0, 'signal' => null]
        ];
    }

    $stdinFile = null;
    if ($stdin !== '') {
        $stdinFile = $tmpDir . DIRECTORY_SEPARATOR . 'stdin.txt';
        file_put_contents($stdinFile, $stdin);
    }

    $result = executeWithTimeout(escapeshellarg($outFile), $stdinFile, $timeoutSec, $tmpDir);
    cleanup($tmpDir);

    return [
        'language' => 'rust',
        'version' => 'local',
        'compile' => ['stdout' => '', 'stderr' => $compileOutput ?: '', 'code' => 0],
        'run' => $result
    ];
}


// =====================================================
// HELPER FUNCTIONS
// =====================================================

/**
 * Execute a command with stdin support and timeout
 */
function executeWithTimeout($cmd, $stdinFile, $timeoutSec, $cwd) {
    $descriptors = [
        0 => $stdinFile ? ['file', $stdinFile, 'r'] : ['pipe', 'r'],
        1 => ['pipe', 'w'],
        2 => ['pipe', 'w'],
    ];

    $process = proc_open($cmd, $descriptors, $pipes, $cwd);

    if (!is_resource($process)) {
        return [
            'stdout' => '',
            'stderr' => 'Failed to start process.',
            'code' => 1,
            'signal' => null
        ];
    }

    if (!$stdinFile && isset($pipes[0])) {
        fclose($pipes[0]);
    }

    stream_set_blocking($pipes[1], false);
    stream_set_blocking($pipes[2], false);

    $stdout = '';
    $stderr = '';
    $startTime = microtime(true);
    $timedOut = false;

    while (true) {
        $elapsed = microtime(true) - $startTime;
        if ($elapsed >= $timeoutSec) {
            $timedOut = true;
            break;
        }

        $status = proc_get_status($process);

        $out = stream_get_contents($pipes[1]);
        $err = stream_get_contents($pipes[2]);
        if ($out) $stdout .= $out;
        if ($err) $stderr .= $err;

        if (!$status['running']) {
            $out = stream_get_contents($pipes[1]);
            $err = stream_get_contents($pipes[2]);
            if ($out) $stdout .= $out;
            if ($err) $stderr .= $err;
            break;
        }

        if (strlen($stdout) > 1048576 || strlen($stderr) > 1048576) {
            $timedOut = true;
            $stderr .= "\n[Output limit exceeded]";
            break;
        }

        usleep(10000);
    }

    $exitCode = 0;
    $signal = null;

    if ($timedOut) {
        $status = proc_get_status($process);
        if ($status['running']) {
            $pid = $status['pid'];
            if (PHP_OS_FAMILY === 'Windows') {
                shell_exec("taskkill /F /T /PID $pid 2>NUL");
            } else {
                shell_exec("kill -9 $pid 2>/dev/null");
            }
        }
        $signal = 'SIGKILL';
        $exitCode = 137;
    } else {
        $status = proc_get_status($process);
        $exitCode = $status['exitcode'] ?? 0;
    }

    fclose($pipes[1]);
    fclose($pipes[2]);
    proc_close($process);

    return [
        'stdout' => $stdout,
        'stderr' => $stderr,
        'code' => $exitCode,
        'signal' => $signal
    ];
}

/**
 * Detect available runtimes on this machine
 */
function detectRuntimes() {
    $runtimes = [];
    $isWindows = PHP_OS_FAMILY === 'Windows';

    $runtimes['python'] = findExecutable(['python', 'python3']);
    $runtimes['node'] = findExecutable(['node']);

    $phpPaths = [];
    if ($isWindows) {
        $wampPhpBase = 'c:\\wamp64\\bin\\php';
        if (is_dir($wampPhpBase)) {
            $dirs = @scandir($wampPhpBase);
            if ($dirs) {
                rsort($dirs);
                foreach ($dirs as $d) {
                    $candidate = $wampPhpBase . '\\' . $d . '\\php.exe';
                    if (file_exists($candidate)) {
                        $phpPaths[] = $candidate;
                        break;
                    }
                }
            }
        }
    }
    $runtimes['php'] = !empty($phpPaths) ? $phpPaths[0] : findExecutable(['php']);

    $runtimes['gcc'] = findExecutable(['gcc']);
    $runtimes['g++'] = findExecutable(['g++']);
    $runtimes['javac'] = findExecutable(['javac']);
    $runtimes['java'] = findExecutable(['java']);
    $runtimes['go'] = findExecutable(['go']);
    $runtimes['rustc'] = findExecutable(['rustc']);
    $runtimes['ruby'] = findExecutable(['ruby']);
    $runtimes['perl'] = findExecutable(['perl']);
    $runtimes['lua'] = findExecutable(['lua', 'lua54', 'lua53']);
    $runtimes['bash'] = findExecutable(['bash']);
    $runtimes['sqlite3'] = findExecutable(['sqlite3']);

    return $runtimes;
}

/**
 * Find an executable in the system PATH
 */
function findExecutable($names) {
    $isWindows = PHP_OS_FAMILY === 'Windows';

    foreach ($names as $name) {
        if ($isWindows) {
            $result = @shell_exec('where ' . $name . ' 2>NUL');
        } else {
            $result = @shell_exec('which ' . escapeshellarg($name) . ' 2>/dev/null');
        }
        $result = trim($result ?? '');
        if (!empty($result)) {
            $lines = preg_split('/[\r\n]+/', $result);
            $path = trim($lines[0]);
            if (!empty($path) && file_exists($path)) {
                return $path;
            }
        }

        if ($isWindows) {
            $commonPaths = getCommonWindowsPaths($name);
            foreach ($commonPaths as $p) {
                if (file_exists($p)) {
                    return $p;
                }
            }
        }
    }
    return null;
}

/**
 * Get common installation paths for executables on Windows
 */
function getCommonWindowsPaths($name) {
    $userHomes = [];
    $usersDir = 'C:\\Users';
    if (is_dir($usersDir)) {
        $entries = @scandir($usersDir);
        if ($entries) {
            foreach ($entries as $entry) {
                if ($entry === '.' || $entry === '..' || $entry === 'Public' || $entry === 'Default' || $entry === 'Default User' || $entry === 'All Users') continue;
                $fullPath = $usersDir . '\\' . $entry;
                if (is_dir($fullPath)) {
                    $userHomes[] = $fullPath;
                }
            }
        }
    }

    $paths = [];
    switch ($name) {
        case 'python':
        case 'python3':
            foreach ($userHomes as $home) {
                $localPrograms = $home . '\\AppData\\Local\\Programs\\Python';
                if (is_dir($localPrograms)) {
                    $dirs = @scandir($localPrograms);
                    if ($dirs) {
                        rsort($dirs);
                        foreach ($dirs as $d) {
                            if (stripos($d, 'python') === 0) {
                                $paths[] = $localPrograms . '\\' . $d . '\\python.exe';
                            }
                        }
                    }
                }
            }
            $paths[] = 'C:\\Python313\\python.exe';
            $paths[] = 'C:\\Python312\\python.exe';
            $paths[] = 'C:\\Python311\\python.exe';
            $paths[] = 'C:\\Python310\\python.exe';
            $paths[] = 'C:\\Python39\\python.exe';
            break;
        case 'node':
            $paths[] = 'C:\\Program Files\\nodejs\\node.exe';
            foreach ($userHomes as $home) {
                $paths[] = $home . '\\AppData\\Roaming\\nvm\\current\\node.exe';
            }
            break;
        case 'gcc':
            $paths[] = 'C:\\MinGW\\bin\\gcc.exe';
            $paths[] = 'C:\\TDM-GCC-64\\bin\\gcc.exe';
            $paths[] = 'C:\\msys64\\mingw64\\bin\\gcc.exe';
            break;
        case 'g++':
            $paths[] = 'C:\\MinGW\\bin\\g++.exe';
            $paths[] = 'C:\\TDM-GCC-64\\bin\\g++.exe';
            $paths[] = 'C:\\msys64\\mingw64\\bin\\g++.exe';
            break;
        case 'java':
            $paths[] = 'C:\\Program Files\\Java\\jdk-21\\bin\\java.exe';
            $paths[] = 'C:\\Program Files\\Java\\jdk-17\\bin\\java.exe';
            break;
        case 'javac':
            $paths[] = 'C:\\Program Files\\Java\\jdk-21\\bin\\javac.exe';
            $paths[] = 'C:\\Program Files\\Java\\jdk-17\\bin\\javac.exe';
            break;
        case 'go':
            $paths[] = 'C:\\Program Files\\Go\\bin\\go.exe';
            foreach ($userHomes as $home) {
                $paths[] = $home . '\\go\\bin\\go.exe';
            }
            break;
        case 'bash':
            $paths[] = 'C:\\Program Files\\Git\\bin\\bash.exe';
            $paths[] = 'C:\\Windows\\System32\\bash.exe';
            break;
    }
    return $paths;
}

/**
 * Strip basic TypeScript type annotations for Node execution
 */
function stripTypeScriptTypes($code) {
    $code = preg_replace('/:\s*(string|number|boolean|any|void|never|unknown|object)\b(\[\])?/i', '', $code);
    $code = preg_replace('/^(interface|type)\s+\w+\s*\{[^}]*\}/m', '', $code);
    $code = preg_replace('/<\w+(?:,\s*\w+)*>/', '', $code);
    $code = preg_replace('/\s+as\s+\w+/i', '', $code);
    return $code;
}

/**
 * Build an error result
 */
function errorResult($message) {
    return [
        'language' => 'unknown',
        'version' => 'N/A',
        'error_type' => 'runtime_not_found',
        'run' => [
            'stdout' => '',
            'stderr' => $message,
            'code' => 1,
            'signal' => null
        ]
    ];
}

/**
 * Recursively delete a temp directory
 */
function cleanup($dir) {
    if (!is_dir($dir)) return;
    $items = @scandir($dir);
    if (!$items) return;
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        $path = $dir . DIRECTORY_SEPARATOR . $item;
        if (is_dir($path)) {
            cleanup($path);
        } else {
            @unlink($path);
        }
    }
    @rmdir($dir);
}
?>
