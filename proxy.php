<?php
// client/proxy.php - Complete Fixed Version
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Max-Age: 86400');

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

$url = $_GET['url'] ?? '';
if (!filter_var($url, FILTER_VALIDATE_URL)) {
    die('Invalid URL');
}

// Parse the target URL
$parsed = parse_url($url);
$target_base = $parsed['scheme'] . '://' . $parsed['host'];
$target_path = $parsed['path'] ?? '/';

// Initialize cURL
$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTPHEADER => [
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
        'Accept-Language: en-US,en;q=0.5',
        'Accept-Encoding: gzip, deflate',
        'Connection: keep-alive',
        'Upgrade-Insecure-Requests: 1',
    ],
    CURLOPT_ENCODING => '',
    CURLOPT_HEADERFUNCTION => function($curl, $header_line) {
        // Skip restrictive headers
        $header_lower = strtolower($header_line);
        if (strpos($header_lower, 'x-frame-options') !== false ||
            strpos($header_lower, 'content-security-policy') !== false ||
            strpos($header_lower, 'frame-ancestors') !== false) {
            return strlen($header_line);
        }
        return strlen($header_line);
    }
]);

$response = curl_exec($ch);
$error = curl_error($ch);
curl_close($ch);

if ($error) {
    die('Proxy Error: ' . $error);
}

// Rewrite URLs
$base_url = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);

// Fix relative URLs
$response = preg_replace_callback(
    '/(src|href|action)=["\'](\/[^"\']*|\.\.\/[^"\']*)["\']/i',
    function($matches) use ($target_base) {
        $attr = $matches[1];
        $path = $matches[2];
        
        if (strpos($path, '//') === 0) {
            return $attr . '="' . $path . '"';
        } elseif (strpos($path, '/') === 0) {
            return $attr . '="' . $target_base . $path . '"';
        } elseif (strpos($path, '../') === 0) {
            return $attr . '="' . $target_base . '/' . ltrim($path, '../') . '"';
        }
        return $matches[0];
    },
    $response
);

// Fix CSS urls
$response = preg_replace_callback(
    '/url\([\'"]?([^\'")]+)[\'"]?\)/i',
    function($matches) use ($target_base) {
        $url = $matches[1];
        if (strpos($url, 'http') === 0) {
            return 'url("' . $url . '")';
        } elseif (strpos($url, '//') === 0) {
            return 'url("' . $url . '")';
        } elseif (strpos($url, '/') === 0) {
            return 'url("' . $target_base . $url . '")';
        }
        return $matches[0];
    },
    $response
);

// Add base tag
$injected = '<head>
    <base href="' . $target_base . $target_path . '">';

$response = preg_replace('/<head>/i', $injected, $response);

// Add meta tags and styles before closing head
$response = str_replace('</head>', 
    '<meta http-equiv="Content-Security-Policy" content="default-src * \'unsafe-inline\' \'unsafe-eval\' data: blob:; img-src * data: blob:; style-src * \'unsafe-inline\'; script-src * \'unsafe-inline\' \'unsafe-eval\';">' .
    '<meta name="referrer" content="no-referrer">' .
    '<style>
        /* Hide popups and cookie notices */
        [class*="cookie"], [id*="cookie"], [class*="popup"], [id*="popup"],
        [class*="modal"], [id*="modal"], [class*="overlay"], [id*="overlay"],
        [class*="gdpr"], [id*="gdpr"], [class*="consent"], [id*="consent"],
        [class*="banner"], [id*="banner"], [class*="notice"], [id*="notice"] {
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
            pointer-events: none !important;
        }
        body { overflow-x: hidden; }
    </style>
    </head>', 
    $response
);

// Set response headers
header('Content-Type: text/html; charset=utf-8');
header('X-Frame-Options: ALLOWALL');
echo $response;
?>