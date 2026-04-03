<!-- Cypher Section - Online Code Editor -->
<div id="cypher-section" class="content-section" style="display: none;">

    <style>
        /* ===== Cypher Section Styles ===== */
        .cypher-container {
            display: flex;
            flex-direction: column;
            height: calc(100vh - 100px);
            gap: 0;
        }

        /* Top Toolbar */
        .cypher-toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 20px;
            background: var(--card-bg);
            border-radius: var(--border-radius) var(--border-radius) 0 0;
            box-shadow: var(--shadow);
            flex-shrink: 0;
        }

        .cypher-toolbar-left {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .cypher-toolbar-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .cypher-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 18px;
            font-weight: 700;
            color: var(--text-dark);
        }

        .cypher-logo i {
            font-size: 22px;
            color: var(--primary-blue);
        }

        .cypher-lang-select {
            padding: 8px 14px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            font-weight: 500;
            color: var(--text-dark);
            background: #f8f9fa;
            cursor: pointer;
            outline: none;
            transition: border-color 0.2s;
            min-width: 160px;
        }

        .cypher-lang-select:focus {
            border-color: var(--primary-blue);
        }

        .cypher-theme-select {
            padding: 8px 12px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            font-weight: 500;
            color: var(--text-dark);
            background: #f8f9fa;
            cursor: pointer;
            outline: none;
            transition: border-color 0.2s;
        }

        .cypher-theme-select:focus {
            border-color: var(--primary-blue);
        }

        .cypher-font-select {
            padding: 8px 10px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            font-weight: 500;
            color: var(--text-dark);
            background: #f8f9fa;
            cursor: pointer;
            outline: none;
            width: 70px;
        }

        .cypher-btn {
            padding: 8px 20px;
            border: none;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 6px;
            transition: all 0.2s;
        }

        .cypher-btn-run {
            background: linear-gradient(135deg, #06d6a0, #05b384);
            color: white;
        }

        .cypher-btn-run:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(6, 214, 160, 0.4);
        }

        .cypher-btn-run:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .cypher-btn-clear {
            background: #f0f0f0;
            color: var(--text-dark);
        }

        .cypher-btn-clear:hover {
            background: #e0e0e0;
        }

        .cypher-btn-reset {
            background: none;
            color: var(--text-light);
            padding: 8px 12px;
        }

        .cypher-btn-reset:hover {
            color: var(--accent-red);
        }

        .cypher-btn-export {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            color: white;
        }

        .cypher-btn-export:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(67, 97, 238, 0.4);
        }

        .cypher-btn-import {
            background: linear-gradient(135deg, #ffd166, #f9c74f);
            color: var(--text-dark);
        }

        .cypher-btn-import:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(255, 209, 102, 0.4);
        }

        /* Editor + Output layout */
        .cypher-workspace {
            display: flex;
            flex: 1;
            min-height: 0;
            border-radius: 0 0 var(--border-radius) var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        /* Editor Panel */
        .cypher-editor-panel {
            flex: 1;
            display: flex;
            flex-direction: column;
            min-width: 0;
            background: #1e1e1e;
        }

        .cypher-editor-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8px 16px;
            background: #2d2d2d;
            border-bottom: 1px solid #404040;
            flex-shrink: 0;
        }

        .cypher-editor-tab {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 12px;
            color: #ccc;
            font-weight: 500;
        }

        .cypher-editor-tab i {
            font-size: 14px;
            color: #89d185;
        }

        .cypher-editor-info {
            font-size: 11px;
            color: #888;
        }

        #cypherEditorContainer {
            flex: 1;
            min-height: 400px;
            height: 100%;
        }

        /* Right Panel (Input + Output) */
        .cypher-right-panel {
            width: 420px;
            display: flex;
            flex-direction: column;
            border-left: 2px solid #e9ecef;
            background: var(--card-bg);
            flex-shrink: 0;
        }

        .cypher-input-section {
            flex-shrink: 0;
            border-bottom: 2px solid #e9ecef;
        }

        .cypher-panel-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 16px;
            background: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
        }

        .cypher-panel-title {
            font-size: 12px;
            font-weight: 600;
            color: var(--text-dark);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .cypher-panel-title i {
            font-size: 13px;
            color: var(--primary-blue);
        }

        .cypher-stdin {
            width: 100%;
            padding: 12px 16px;
            border: none;
            outline: none;
            font-family: 'Fira Code', 'Cascadia Code', 'Consolas', monospace;
            font-size: 13px;
            resize: none;
            background: white;
            color: var(--text-dark);
            height: 80px;
        }

        .cypher-stdin::placeholder {
            color: #bbb;
        }

        /* Output Section */
        .cypher-output-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 0;
        }

        .cypher-output {
            flex: 1;
            padding: 14px 16px;
            overflow-y: auto;
            font-family: 'Fira Code', 'Cascadia Code', 'Consolas', monospace;
            font-size: 13px;
            line-height: 1.6;
            white-space: pre-wrap;
            word-break: break-word;
            color: var(--text-dark);
            background: white;
        }

        .cypher-output.cypher-output-error {
            color: var(--accent-red);
        }

        .cypher-output.cypher-output-success {
            color: #2b8a3e;
        }

        .cypher-output.cypher-html-active {
            padding: 0;
            overflow: hidden;
        }

        .cypher-output-placeholder {
            color: #bbb;
            font-style: italic;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            gap: 8px;
        }

        .cypher-output-placeholder i {
            font-size: 32px;
            color: #ddd;
        }

        /* Status Bar */
        .cypher-statusbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 6px 16px;
            background: #f1f3f5;
            border-top: 1px solid #e9ecef;
            font-size: 11px;
            color: var(--text-light);
            flex-shrink: 0;
        }

        .cypher-status-left,
        .cypher-status-right {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .cypher-status-item {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .cypher-status-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--accent-green);
        }

        .cypher-status-dot.running {
            background: var(--accent-yellow);
            animation: cypherPulse 1s infinite;
        }

        .cypher-status-dot.error {
            background: var(--accent-red);
        }

        @keyframes cypherPulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.4; }
        }

        /* Loading spinner */
        .cypher-spinner {
            display: inline-block;
            width: 14px;
            height: 14px;
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: cypherSpin 0.7s linear infinite;
        }

        @keyframes cypherSpin {
            to { transform: rotate(360deg); }
        }

        /* Hidden file input for import */
        #cypherFileInput {
            display: none;
        }

        /* Responsive */
        @media (max-width: 1100px) {
            .cypher-workspace {
                flex-direction: column;
            }

            .cypher-right-panel {
                width: 100%;
                max-height: 300px;
                border-left: none;
                border-top: 2px solid #e9ecef;
            }

            .cypher-editor-panel {
                min-height: 350px;
            }
        }

        @media (max-width: 1024px) {
            .cypher-toolbar {
                flex-wrap: wrap;
                gap: 10px;
            }

            .cypher-toolbar-left,
            .cypher-toolbar-right {
                flex-wrap: wrap;
            }

            .cypher-toolbar-right {
                margin-left: auto;
            }

            .cypher-lang-select {
                min-width: 110px;
            }
        }

        @media (max-width: 768px) {
            .cypher-toolbar {
                flex-direction: column;
                gap: 10px;
                align-items: stretch;
            }

            .cypher-toolbar-left,
            .cypher-toolbar-right {
                flex-wrap: wrap;
            }

            .cypher-toolbar-right {
                justify-content: flex-end;
            }

            .cypher-container {
                height: auto;
                min-height: calc(100vh - 100px);
            }
        }
    </style>

    <!-- Hidden file input for importing code -->
    <input type="file" id="cypherFileInput" accept=".py,.js,.ts,.c,.cpp,.java,.cs,.go,.rs,.php,.rb,.swift,.kt,.r,.pl,.lua,.sh,.sql,.txt,.h,.hpp,.jsx,.tsx,.json,.xml,.html,.css">

    <!-- Toolbar -->
    <div class="cypher-container">
        <div class="cypher-toolbar">
            <div class="cypher-toolbar-left">
                <div class="cypher-logo">
                    <i class="fas fa-terminal"></i>
                    <span>Cypher</span>
                </div>

                <select id="cypherLangSelect" class="cypher-lang-select">
                    <option value="python" data-ext="py">Python</option>
                    <option value="javascript" data-ext="js">JavaScript</option>
                    <option value="typescript" data-ext="ts">TypeScript</option>
                    <option value="c" data-ext="c">C</option>
                    <option value="c++" data-ext="cpp">C++</option>
                    <option value="java" data-ext="java">Java</option>
                    <option value="go" data-ext="go">Go</option>
                    <option value="rust" data-ext="rs">Rust</option>
                    <option value="php" data-ext="php">PHP</option>
                    <option value="ruby" data-ext="rb">Ruby</option>
                    <option value="perl" data-ext="pl">Perl</option>
                    <option value="lua" data-ext="lua">Lua</option>
                    <option value="bash" data-ext="sh">Bash</option>
                    <option value="sql" data-ext="sql">SQL</option>
                    <option value="html" data-ext="html">HTML</option>
                </select>

                <select id="cypherThemeSelect" class="cypher-theme-select">
                    <option value="vs-dark">Dark</option>
                    <option value="vs">Light</option>
                    <option value="hc-black">High Contrast</option>
                </select>

                <select id="cypherFontSize" class="cypher-font-select">
                    <option value="12">12px</option>
                    <option value="14" selected>14px</option>
                    <option value="16">16px</option>
                    <option value="18">18px</option>
                    <option value="20">20px</option>
                </select>
            </div>

            <div class="cypher-toolbar-right">
                <button type="button" class="cypher-btn cypher-btn-import" id="cypherImportBtn" title="Import code from file">
                    <i class="fas fa-file-import"></i> Import
                </button>
                <button type="button" class="cypher-btn cypher-btn-export" id="cypherExportBtn" title="Export code to file">
                    <i class="fas fa-file-export"></i> Export
                </button>
                <button type="button" class="cypher-btn cypher-btn-reset" id="cypherResetBtn" title="Reset to template">
                    <i class="fas fa-undo"></i>
                </button>
                <button type="button" class="cypher-btn cypher-btn-clear" id="cypherClearOutput" title="Clear output">
                    <i class="fas fa-eraser"></i> Clear
                </button>
                <button type="button" class="cypher-btn cypher-btn-run" id="cypherRunBtn">
                    <i class="fas fa-play"></i> Run
                </button>
            </div>
        </div>

        <!-- Workspace: Editor + Output -->
        <div class="cypher-workspace">
            <!-- Code Editor -->
            <div class="cypher-editor-panel">
                <div class="cypher-editor-header">
                    <div class="cypher-editor-tab">
                        <i class="fas fa-file-code"></i>
                        <span id="cypherFileName">main.py</span>
                    </div>
                    <div class="cypher-editor-info">
                        <span id="cypherCursorPos">Ln 1, Col 1</span>
                    </div>
                </div>
                <div id="cypherEditorContainer"></div>
            </div>

            <!-- Right Panel: Input + Output -->
            <div class="cypher-right-panel">
                <!-- Stdin Input -->
                <div class="cypher-input-section">
                    <div class="cypher-panel-header">
                        <div class="cypher-panel-title">
                            <i class="fas fa-keyboard"></i> Input (stdin)
                        </div>
                    </div>
                    <textarea id="cypherStdin" class="cypher-stdin" placeholder="Enter input for your program here..."></textarea>
                </div>

                <!-- Output -->
                <div class="cypher-output-section">
                    <div class="cypher-panel-header">
                        <div class="cypher-panel-title">
                            <i class="fas fa-terminal"></i> Output
                        </div>
                        <span id="cypherExecTime" style="font-size: 11px; color: var(--text-light);"></span>
                    </div>
                    <div id="cypherOutput" class="cypher-output">
                        <div class="cypher-output-placeholder">
                            <i class="fas fa-play-circle"></i>
                            <span>Click <strong>Run</strong> to execute your code</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Status Bar -->
        <div class="cypher-statusbar">
            <div class="cypher-status-left">
                <div class="cypher-status-item">
                    <div class="cypher-status-dot" id="cypherStatusDot"></div>
                    <span id="cypherStatusText">Ready</span>
                </div>
            </div>
            <div class="cypher-status-right">
                <div class="cypher-status-item" id="cypherLangVersion"></div>
                <div class="cypher-status-item">
                    <i class="fas fa-keyboard" style="font-size: 10px;"></i>
                    <span>Ctrl+Enter to Run</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Monaco Editor CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.45.0/min/vs/loader.min.js"></script>

    <script>
    (function() {
        'use strict';

        // ===== Language configurations =====
        const LANG_CONFIG = {
            'python': {
                monaco: 'python',
                ext: 'py',
                mime: 'text/x-python',
                template: '# Python - Cypher Editor\n\ndef main():\n    name = input("Enter your name: ")\n    print(f"Hello, {name}! Welcome to Cypher.")\n\nmain()\n'
            },
            'javascript': {
                monaco: 'javascript',
                ext: 'js',
                mime: 'text/javascript',
                template: '// JavaScript - Cypher Editor\n\nconst readline = require("readline");\nconst rl = readline.createInterface({ input: process.stdin });\n\nrl.question("", (name) => {\n    console.log(`Hello, ${name}! Welcome to Cypher.`);\n    rl.close();\n});\n'
            },
            'typescript': {
                monaco: 'typescript',
                ext: 'ts',
                mime: 'text/typescript',
                template: '// TypeScript - Cypher Editor\n\nconst message: string = "Hello from Cypher!";\nconsole.log(message);\n'
            },
            'c': {
                monaco: 'c',
                ext: 'c',
                mime: 'text/x-csrc',
                template: '// C - Cypher Editor\n\n#include <stdio.h>\n\nint main() {\n    char name[100];\n    printf("Enter your name: ");\n    scanf("%s", name);\n    printf("Hello, %s! Welcome to Cypher.\\n", name);\n    return 0;\n}\n'
            },
            'c++': {
                monaco: 'cpp',
                ext: 'cpp',
                mime: 'text/x-c++src',
                template: '// C++ - Cypher Editor\n\n#include <iostream>\n#include <string>\nusing namespace std;\n\nint main() {\n    string name;\n    cout << "Enter your name: ";\n    cin >> name;\n    cout << "Hello, " << name << "! Welcome to Cypher." << endl;\n    return 0;\n}\n'
            },
            'java': {
                monaco: 'java',
                ext: 'java',
                mime: 'text/x-java',
                template: '// Java - Cypher Editor\n\nimport java.util.Scanner;\n\npublic class Main {\n    public static void main(String[] args) {\n        Scanner sc = new Scanner(System.in);\n        System.out.print("Enter your name: ");\n        String name = sc.nextLine();\n        System.out.println("Hello, " + name + "! Welcome to Cypher.");\n    }\n}\n'
            },
            'csharp': {
                monaco: 'csharp',
                ext: 'cs',
                mime: 'text/x-csharp',
                template: '// C# - Cypher Editor\n\nusing System;\n\nclass Program {\n    static void Main() {\n        Console.Write("Enter your name: ");\n        string name = Console.ReadLine();\n        Console.WriteLine($"Hello, {name}! Welcome to Cypher.");\n    }\n}\n'
            },
            'go': {
                monaco: 'go',
                ext: 'go',
                mime: 'text/x-go',
                template: '// Go - Cypher Editor\n\npackage main\n\nimport (\n    "bufio"\n    "fmt"\n    "os"\n)\n\nfunc main() {\n    reader := bufio.NewReader(os.Stdin)\n    fmt.Print("Enter your name: ")\n    name, _ := reader.ReadString(\'\\n\')\n    fmt.Printf("Hello, %s! Welcome to Cypher.\\n", name)\n}\n'
            },
            'rust': {
                monaco: 'rust',
                ext: 'rs',
                mime: 'text/x-rustsrc',
                template: '// Rust - Cypher Editor\n\nuse std::io;\n\nfn main() {\n    println!("Enter your name:");\n    let mut name = String::new();\n    io::stdin().read_line(&mut name).unwrap();\n    println!("Hello, {}! Welcome to Cypher.", name.trim());\n}\n'
            },
            'php': {
                monaco: 'php',
                ext: 'php',
                mime: 'application/x-httpd-php',
                template: '<' + '?php\n// PHP - Cypher Editor\n\n$name = readline("Enter your name: ");\necho "Hello, $name! Welcome to Cypher.\\n";\n'
            },
            'ruby': {
                monaco: 'ruby',
                ext: 'rb',
                mime: 'text/x-ruby',
                template: '# Ruby - Cypher Editor\n\nprint "Enter your name: "\nname = gets.chomp\nputs "Hello, #{name}! Welcome to Cypher."\n'
            },
            'swift': {
                monaco: 'swift',
                ext: 'swift',
                mime: 'text/x-swift',
                template: '// Swift - Cypher Editor\n\nprint("Enter your name: ", terminator: "")\nif let name = readLine() {\n    print("Hello, \\(name)! Welcome to Cypher.")\n}\n'
            },
            'kotlin': {
                monaco: 'kotlin',
                ext: 'kt',
                mime: 'text/x-kotlin',
                template: '// Kotlin - Cypher Editor\n\nfun main() {\n    print("Enter your name: ")\n    val name = readLine()\n    println("Hello, $name! Welcome to Cypher.")\n}\n'
            },
            'r': {
                monaco: 'r',
                ext: 'r',
                mime: 'text/x-rsrc',
                template: '# R - Cypher Editor\n\nname <- readline("Enter your name: ")\ncat(paste0("Hello, ", name, "! Welcome to Cypher.\\n"))\n'
            },
            'perl': {
                monaco: 'perl',
                ext: 'pl',
                mime: 'text/x-perl',
                template: '# Perl - Cypher Editor\n\nprint "Enter your name: ";\nmy $name = <STDIN>;\nchomp $name;\nprint "Hello, $name! Welcome to Cypher.\\n";\n'
            },
            'lua': {
                monaco: 'lua',
                ext: 'lua',
                mime: 'text/x-lua',
                template: '-- Lua - Cypher Editor\n\nio.write("Enter your name: ")\nlocal name = io.read()\nprint("Hello, " .. name .. "! Welcome to Cypher.")\n'
            },
            'bash': {
                monaco: 'shell',
                ext: 'sh',
                mime: 'application/x-sh',
                template: '#!/bin/bash\n# Bash - Cypher Editor\n\nread -p "Enter your name: " name\necho "Hello, $name! Welcome to Cypher."\n'
            },
            'sql': {
                monaco: 'sql',
                ext: 'sql',
                mime: 'text/x-sql',
                template: '-- SQL (SQLite) - Cypher Editor\n\nCREATE TABLE students (\n    id INTEGER PRIMARY KEY,\n    name TEXT NOT NULL,\n    grade TEXT\n);\n\nINSERT INTO students VALUES (1, \'Aman\', \'A\');\nINSERT INTO students VALUES (2, \'Kiran\', \'A+\');\nINSERT INTO students VALUES (3, \'Rahul\', \'B\');\n\nSELECT * FROM students;\nSELECT name, grade FROM students WHERE grade = \'A\';\n'
            },
            'html': {
                monaco: 'html',
                ext: 'html',
                mime: 'text/html',
                template: '<!-- HTML - Cypher Editor -->\n<!DOCTYPE html>\n<html lang=\"en\">\n<head>\n    <meta charset=\"UTF-8\">\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>My Page</title>\n    <style>\n        body {\n            font-family: Arial, sans-serif;\n            display: flex;\n            justify-content: center;\n            align-items: center;\n            min-height: 100vh;\n            margin: 0;\n            background: linear-gradient(135deg, #667eea, #764ba2);\n            color: #fff;\n        }\n        .card {\n            background: rgba(255,255,255,0.15);\n            backdrop-filter: blur(10px);\n            border-radius: 16px;\n            padding: 40px;\n            text-align: center;\n        }\n        h1 { margin: 0 0 10px; }\n        p { opacity: 0.85; }\n    </style>\n</head>\n<body>\n    <div class=\"card\">\n        <h1>Hello, Cypher!</h1>\n        <p>Welcome to the HTML editor. Start building!</p>\n    </div>\n</body>\n</html>\n'
            }
        };

        // Map file extensions back to language keys for import
        const EXT_TO_LANG = {};
        Object.keys(LANG_CONFIG).forEach(function(lang) {
            EXT_TO_LANG[LANG_CONFIG[lang].ext] = lang;
        });
        // Extra extension mappings
        EXT_TO_LANG['hpp'] = 'c++';
        EXT_TO_LANG['h'] = 'c';
        EXT_TO_LANG['jsx'] = 'javascript';
        EXT_TO_LANG['tsx'] = 'typescript';
        EXT_TO_LANG['htm'] = 'html';
        EXT_TO_LANG['txt'] = 'python'; // default for .txt

        var cypherEditor = null;
        var isRunning = false;

        // ===== Initialize Monaco Editor =====
        function initMonaco() {
            require.config({
                paths: { vs: 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.45.0/min/vs' }
            });

            require(['vs/editor/editor.main'], function () {
                cypherEditor = monaco.editor.create(document.getElementById('cypherEditorContainer'), {
                    value: LANG_CONFIG['python'].template,
                    language: 'python',
                    theme: 'vs-dark',
                    fontSize: 14,
                    fontFamily: "'Fira Code', 'Cascadia Code', 'Consolas', monospace",
                    fontLigatures: true,
                    minimap: { enabled: true, scale: 1 },
                    scrollBeyondLastLine: false,
                    automaticLayout: true,
                    tabSize: 4,
                    insertSpaces: true,
                    wordWrap: 'on',
                    lineNumbers: 'on',
                    renderLineHighlight: 'all',
                    cursorBlinking: 'smooth',
                    cursorSmoothCaretAnimation: 'on',
                    smoothScrolling: true,
                    padding: { top: 12, bottom: 12 },
                    suggest: {
                        showKeywords: true,
                        showSnippets: true
                    },
                    bracketPairColorization: { enabled: true }
                });

                // Track cursor position
                cypherEditor.onDidChangeCursorPosition(function (e) {
                    var pos = e.position;
                    document.getElementById('cypherCursorPos').textContent =
                        'Ln ' + pos.lineNumber + ', Col ' + pos.column;
                });

                // Ctrl+Enter to run
                cypherEditor.addCommand(monaco.KeyMod.CtrlCmd | monaco.KeyCode.Enter, function () {
                    runCode();
                });

                // Ctrl+S to export
                cypherEditor.addCommand(monaco.KeyMod.CtrlCmd | monaco.KeyCode.KeyS, function () {
                    exportCode();
                });
            });
        }

        // ===== Export Code - Download as file =====
        function exportCode() {
            if (!cypherEditor) return;

            var lang = document.getElementById('cypherLangSelect').value;
            var config = LANG_CONFIG[lang];
            var code = cypherEditor.getValue();
            var fileName = 'main.' + config.ext;

            var blob = new Blob([code], { type: 'text/plain;charset=utf-8' });
            var url = URL.createObjectURL(blob);

            var a = document.createElement('a');
            a.href = url;
            a.download = fileName;
            a.style.display = 'none';
            document.body.appendChild(a);
            a.click();

            // Cleanup
            setTimeout(function() {
                document.body.removeChild(a);
                URL.revokeObjectURL(url);
            }, 100);
        }

        // ===== Import Code - Read from file =====
        function importCode(file) {
            if (!file || !cypherEditor) return;

            // Detect language from file extension
            var fileName = file.name;
            var ext = fileName.split('.').pop().toLowerCase();
            var detectedLang = EXT_TO_LANG[ext];

            var reader = new FileReader();
            reader.onload = function(e) {
                var content = e.target.result;

                // Switch language if detected
                if (detectedLang && LANG_CONFIG[detectedLang]) {
                    var langSelect = document.getElementById('cypherLangSelect');
                    langSelect.value = detectedLang;

                    var config = LANG_CONFIG[detectedLang];
                    document.getElementById('cypherFileName').textContent = fileName;

                    var model = cypherEditor.getModel();
                    monaco.editor.setModelLanguage(model, config.monaco);
                } else {
                    document.getElementById('cypherFileName').textContent = fileName;
                }

                // Set the code content
                cypherEditor.setValue(content);

                // Reset output
                resetOutput();

                // Update status
                document.getElementById('cypherStatusText').textContent = 'Imported: ' + fileName;
            };

            reader.onerror = function() {
                document.getElementById('cypherStatusText').textContent = 'Import failed';
                document.getElementById('cypherStatusDot').className = 'cypher-status-dot error';
            };

            reader.readAsText(file);
        }

        // ===== Reset output panel =====
        function resetOutput() {
            document.getElementById('cypherOutput').innerHTML =
                '<div class="cypher-output-placeholder"><i class="fas fa-play-circle"></i><span>Click <strong>Run</strong> to execute your code</span></div>';
            document.getElementById('cypherOutput').className = 'cypher-output';
            document.getElementById('cypherExecTime').textContent = '';
            document.getElementById('cypherLangVersion').textContent = '';
            document.getElementById('cypherStatusDot').className = 'cypher-status-dot';
            document.getElementById('cypherStatusText').textContent = 'Ready';
        }

        // ===== Run Code via Piston API =====
        function runCode() {
            if (isRunning || !cypherEditor) return;

            var lang = document.getElementById('cypherLangSelect').value;
            var code = cypherEditor.getValue();
            var stdin = document.getElementById('cypherStdin').value;
            var outputEl = document.getElementById('cypherOutput');
            var runBtn = document.getElementById('cypherRunBtn');
            var statusDot = document.getElementById('cypherStatusDot');
            var statusText = document.getElementById('cypherStatusText');
            var execTimeEl = document.getElementById('cypherExecTime');

            if (!code.trim()) {
                outputEl.textContent = 'No code to execute.';
                outputEl.className = 'cypher-output cypher-output-error';
                return;
            }

            // HTML: render in iframe directly, no API needed
            if (lang === 'html') {
                outputEl.innerHTML = '';
                outputEl.className = 'cypher-output cypher-html-active';
                var iframe = document.createElement('iframe');
                iframe.sandbox = 'allow-scripts allow-modals';
                iframe.style.cssText = 'width:100%;height:100%;border:none;background:#fff;display:block;';
                outputEl.appendChild(iframe);
                // Use srcdoc for safe rendering
                iframe.srcdoc = code;
                statusDot.className = 'cypher-status-dot';
                statusText.textContent = 'Done';
                execTimeEl.textContent = '0.00s';
                document.getElementById('cypherLangVersion').textContent = 'html preview';
                return;
            }

            // Update UI to running state
            isRunning = true;
            runBtn.disabled = true;
            runBtn.innerHTML = '<span class="cypher-spinner"></span> Running...';
            statusDot.className = 'cypher-status-dot running';
            statusText.textContent = 'Executing...';
            outputEl.innerHTML = '<div class="cypher-output-placeholder"><i class="fas fa-cog fa-spin"></i><span>Running your code...</span></div>';
            outputEl.className = 'cypher-output';
            execTimeEl.textContent = '';

            var startTime = performance.now();

            var xhr = new XMLHttpRequest();
            // Use local PHP proxy to avoid CORS and API auth issues
            xhr.open('POST', 'components/cypher/execute.php', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.timeout = 35000;

            xhr.onload = function() {
                var elapsed = ((performance.now() - startTime) / 1000).toFixed(2);

                if (xhr.status < 200 || xhr.status >= 300) {
                    var errMsg = 'Server error: ' + xhr.status;
                    try {
                        var errData = JSON.parse(xhr.responseText);
                        if (errData.error) errMsg = errData.error;
                        if (errData.tip) errMsg += '\n\n' + errData.tip;
                    } catch(e) {}
                    outputEl.textContent = errMsg;
                    outputEl.className = 'cypher-output cypher-output-error';
                    statusDot.className = 'cypher-status-dot error';
                    statusText.textContent = 'Failed';
                    execTimeEl.textContent = elapsed + 's';
                    finishRun();
                    return;
                }

                try {
                    var data = JSON.parse(xhr.responseText);
                } catch(parseErr) {
                    outputEl.textContent = 'Failed to parse server response.\n\nRaw: ' + xhr.responseText.substring(0, 200);
                    outputEl.className = 'cypher-output cypher-output-error';
                    statusDot.className = 'cypher-status-dot error';
                    statusText.textContent = 'Failed';
                    execTimeEl.textContent = elapsed + 's';
                    finishRun();
                    return;
                }

                // Display version info
                if (data.language && data.version) {
                    document.getElementById('cypherLangVersion').textContent =
                        data.language + ' ' + data.version;
                }

                // Process output
                var runResult = data.run || {};
                var compileResult = data.compile || {};
                var output = '';
                var hasError = false;

                // Check compile errors first
                if (compileResult.stderr) {
                    output += '=== Compilation Error ===\n' + compileResult.stderr + '\n';
                    hasError = true;
                }

                if (runResult.stdout) {
                    output += runResult.stdout;
                }

                if (runResult.stderr) {
                    if (output) output += '\n';
                    output += runResult.stderr;
                    hasError = true;
                }

                if (runResult.signal === 'SIGKILL') {
                    output += '\n[Process timed out or ran out of memory]';
                    hasError = true;
                }

                if (!output.trim()) {
                    output = '(No output)';
                }

                outputEl.textContent = output;
                outputEl.className = hasError
                    ? 'cypher-output cypher-output-error'
                    : 'cypher-output cypher-output-success';

                execTimeEl.textContent = elapsed + 's';
                statusDot.className = hasError ? 'cypher-status-dot error' : 'cypher-status-dot';
                statusText.textContent = hasError ? 'Error' : 'Done';
                finishRun();
            };

            xhr.onerror = function() {
                var elapsed = ((performance.now() - startTime) / 1000).toFixed(2);
                outputEl.textContent = 'Network error: Could not reach the execution server.\n\nTip: Check your internet connection or try again.';
                outputEl.className = 'cypher-output cypher-output-error';
                statusDot.className = 'cypher-status-dot error';
                statusText.textContent = 'Failed';
                execTimeEl.textContent = elapsed + 's';
                finishRun();
            };

            xhr.ontimeout = function() {
                var elapsed = ((performance.now() - startTime) / 1000).toFixed(2);
                outputEl.textContent = 'Request timed out. The server took too long to respond.\n\nTip: Try again or check your connection.';
                outputEl.className = 'cypher-output cypher-output-error';
                statusDot.className = 'cypher-status-dot error';
                statusText.textContent = 'Timeout';
                execTimeEl.textContent = elapsed + 's';
                finishRun();
            };

            function finishRun() {
                isRunning = false;
                runBtn.disabled = false;
                runBtn.innerHTML = '<i class="fas fa-play"></i> Run';
            }

            xhr.send(JSON.stringify({
                language: lang,
                version: '*',
                files: [{ content: code }],
                stdin: stdin,
                run_timeout: 10000
            }));
        }

        // ===== Event Listeners =====
        document.addEventListener('DOMContentLoaded', function () {

            // Language switch
            document.getElementById('cypherLangSelect').addEventListener('change', function () {
                var lang = this.value;
                var config = LANG_CONFIG[lang];
                if (!config) return;

                document.getElementById('cypherFileName').textContent = 'main.' + config.ext;

                if (cypherEditor) {
                    var model = cypherEditor.getModel();
                    monaco.editor.setModelLanguage(model, config.monaco);
                    cypherEditor.setValue(config.template);
                }

                resetOutput();
            });

            // Theme switch
            document.getElementById('cypherThemeSelect').addEventListener('change', function () {
                if (cypherEditor) {
                    monaco.editor.setTheme(this.value);
                }
            });

            // Font size
            document.getElementById('cypherFontSize').addEventListener('change', function () {
                if (cypherEditor) {
                    cypherEditor.updateOptions({ fontSize: parseInt(this.value) });
                }
            });

            // Run button - preventDefault to stop any form submission / page navigation
            document.getElementById('cypherRunBtn').addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                runCode();
                return false;
            });

            // Clear output
            document.getElementById('cypherClearOutput').addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                document.getElementById('cypherOutput').innerHTML =
                    '<div class="cypher-output-placeholder"><i class="fas fa-play-circle"></i><span>Click <strong>Run</strong> to execute your code</span></div>';
                document.getElementById('cypherOutput').className = 'cypher-output';
                document.getElementById('cypherExecTime').textContent = '';
                return false;
            });

            // Reset to template
            document.getElementById('cypherResetBtn').addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                var lang = document.getElementById('cypherLangSelect').value;
                if (cypherEditor && LANG_CONFIG[lang]) {
                    cypherEditor.setValue(LANG_CONFIG[lang].template);
                    document.getElementById('cypherFileName').textContent = 'main.' + LANG_CONFIG[lang].ext;
                }
                return false;
            });

            // Export button
            document.getElementById('cypherExportBtn').addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                exportCode();
                return false;
            });

            // Import button - trigger hidden file input
            document.getElementById('cypherImportBtn').addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                document.getElementById('cypherFileInput').click();
                return false;
            });

            // File input change - handle imported file
            document.getElementById('cypherFileInput').addEventListener('change', function (e) {
                var file = this.files[0];
                if (file) {
                    importCode(file);
                }
                // Reset input so same file can be re-imported
                this.value = '';
            });

            // Initialize Monaco when section becomes visible
            var cypherSection = document.getElementById('cypher-section');
            var monacoInitialized = false;

            function initMonacoIfVisible() {
                if (monacoInitialized) {
                    // If already initialized, just re-layout when section shows
                    if (cypherEditor && cypherSection.style.display !== 'none') {
                        setTimeout(function() { cypherEditor.layout(); }, 100);
                    }
                    return;
                }
                if (cypherSection && cypherSection.style.display !== 'none') {
                    monacoInitialized = true;
                    // Small delay to let the browser calculate layout after display change
                    setTimeout(function() { initMonaco(); }, 150);
                }
            }

            // Try on page load (in case section is already visible)
            initMonacoIfVisible();

            // Watch for section becoming visible
            if (cypherSection) {
                var monacoObserver = new MutationObserver(function() {
                    initMonacoIfVisible();
                });
                monacoObserver.observe(cypherSection, { attributes: true, attributeFilter: ['style'] });
            }
        });
    })();
    </script>
</div>
