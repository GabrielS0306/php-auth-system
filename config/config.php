<?php

    define('SITE_NAME', 'Dev Panel');

    if (!defined('BASE_URL')) {
        $scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
        $basePath = rtrim(str_replace('\\', '/', dirname($scriptName)), '/');
        $basePath = preg_replace('#/public$#i', '', $basePath);

        define('BASE_URL', ($basePath === '' || $basePath === '.') ? '/' : $basePath . '/');
    }
    
    define('SITE_EMAIL', 'devpanel@gmail.com');
    define('VERSION', '1.0');

?>
