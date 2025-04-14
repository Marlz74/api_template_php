<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Serve existing files directly
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false;
}

// Fallback to index.php with query param like .htaccess would
$_GET['url'] = ltrim($uri, '/');
require_once __DIR__ . '/index.php';
