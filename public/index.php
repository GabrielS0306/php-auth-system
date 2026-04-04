<?php

    // inicia sessão global (evita erro de session_start duplicado)
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    require_once __DIR__ . '/../vendor/autoload.php';
    require_once __DIR__ . '/../config/config.php';
    require_once __DIR__ . '/../helpers/functions.php';

    define('BASE_PATH', dirname(__DIR__));

    use App\Core\Router;

    // cria o router
    $router = new Router();

    // carrega as rotas
    require __DIR__ . '/../routes/web.php';
    require __DIR__ . '/../routes/api.php';

    // executa o sistema
    $router->dispatch();

?>
