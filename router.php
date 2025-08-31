<?php

if (php_sapi_name() === 'cli-server') {
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__.'/html'.$url['path'];
    if (is_file($file)) {
        return false; // serve the requested resource as-is.
    }
}

require_once __DIR__.'/html/index.php';
