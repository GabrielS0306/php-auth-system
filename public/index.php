<?php

    $requestedPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    $staticFile = realpath(__DIR__ . '/' . ltrim($requestedPath, '/'));

    if (
        PHP_SAPI === 'cli-server'
        && $staticFile !== false
        && strpos($staticFile, __DIR__) === 0
        && is_file($staticFile)
        && strtolower(pathinfo($staticFile, PATHINFO_EXTENSION)) !== 'php'
    ) {
        return false;
    }

    // Inicia sessao global.
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    require_once __DIR__ . '/../vendor/autoload.php';
    require_once __DIR__ . '/../config/config.php';
    require_once __DIR__ . '/../helpers/functions.php';

    define('BASE_PATH', dirname(__DIR__));

    use App\Core\Router;

    $router = new Router();

    require __DIR__ . '/../routes/web.php';
    require __DIR__ . '/../routes/api.php';

    $router->dispatch();
