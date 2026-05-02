<?php

use App\Controllers\AdminController;
use App\Controllers\AuthController;

require_once __DIR__ . '/../config/config.php';

$renderView = function (string $view, ?string $middleware = null, array $data = []): void {
    if ($middleware !== null) {
        require BASE_PATH . '/App/Middlewares/' . $middleware . '.php';
    }

    extract($data, EXTR_SKIP);

    require BASE_PATH . '/Views/' . $view . '.php';
};

$loadUsersData = function (): array {
    require BASE_PATH . '/config/conexao.php';

    $stmt = $conexao->query("
        SELECT id, nome, email, role
        FROM usuarios
        ORDER BY id DESC
    ");

    $usuarios = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    $totalUsuarios = count($usuarios);
    $totalAdmins = 0;
    $totalUsers = 0;

    foreach ($usuarios as $usuario) {
        if (($usuario['role'] ?? 'user') === 'admin') {
            $totalAdmins++;
        } else {
            $totalUsers++;
        }
    }

    return [
        'usuarios' => $usuarios,
        'totalUsuarios' => $totalUsuarios,
        'totalAdmins' => $totalAdmins,
        'totalUsers' => $totalUsers,
        'totalProjetosAtivos' => 0,
        'totalProjetosConcluidos' => 0,
    ];
};

$redirectTo = function (string $path): callable {
    return function () use ($path): void {
        header('Location: ' . BASE_URL . ltrim($path, '/'));
        exit;
    };
};

$router->get('Login.php', $redirectTo('login'));
$router->get('login.php', $redirectTo('login'));
$router->get('register.php', $redirectTo('register'));
$router->get('logout.php', $redirectTo('logout'));
$router->get('user/dashboard.php', $redirectTo('dashboard'));
$router->get('user/projetos.php', $redirectTo('projetos'));
$router->get('user/relatorios.php', $redirectTo('relatorios'));
$router->get('user/configuracoes.php', $redirectTo('configuracoes'));
$router->get('admin/dashboard.php', $redirectTo('admin'));
$router->get('admin/usuarios.php', $redirectTo('admin/usuarios'));
$router->get('admin/projetos.php', $redirectTo('admin/projetos'));
$router->get('admin/relatorios.php', $redirectTo('admin/relatorios'));
$router->get('admin/configuracoes.php', $redirectTo('admin/configuracoes'));

$router->get('/', function () {
    if (isset($_SESSION['user_id'])) {
        header('Location: ' . BASE_URL . 'dashboard');
    } else {
        header('Location: ' . BASE_URL . 'login');
    }
    exit;
});

$router->get('login', [AuthController::class, 'login']);
$router->post('login', [AuthController::class, 'login']);
$router->get('register', function () use ($renderView) {
    $renderView('auth/register');
});
$router->post('register', [AuthController::class, 'register']);
$router->get('logout', [AuthController::class, 'logout']);
$router->post('configs-user', [AuthController::class, 'updatePassword']);

$router->get('dashboard', function () use ($renderView) {
    $renderView('user/dashboard', 'auth');
});

$router->get('projetos', function () use ($renderView) {
    $renderView('user/projetos', 'auth');
});

$router->get('relatorios', function () use ($renderView) {
    $renderView('user/relatorios', 'auth');
});

$router->get('configuracoes', function () use ($renderView) {
    $renderView('user/configuracoes', 'auth');
});

$router->post('admin/tornar-admin', [AdminController::class, 'tornarAdmin']);

$router->get('admin', function () use ($renderView, $loadUsersData) {
    $renderView('admin/dashboard', 'admin', $loadUsersData());
});

$router->get('admin/usuarios', function () use ($renderView, $loadUsersData) {
    $renderView('admin/usuarios', 'admin', $loadUsersData());
});

$router->get('admin/projetos', function () use ($renderView) {
    $renderView('admin/projetos', 'admin');
});

$router->get('admin/relatorios', function () use ($renderView) {
    $renderView('admin/relatorios', 'admin');
});

$router->get('admin/configuracoes', function () use ($renderView) {
    $renderView('admin/configuracoes', 'admin');
});

$router->get('teste', function () {
    echo 'ROTA FUNCIONANDO';
});

?>
