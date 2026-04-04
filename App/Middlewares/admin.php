<?php

    // Incluir o middleware de autenticação
    require __DIR__ . '/auth.php';

    // Verificar se o usuário está autenticado e possui permissão de administrador
    // Se não atender aos critérios, redirecionar para o dashboard
if (($_SESSION['role'] ?? null) !== 'admin') {
    header('Location: ' . BASE_URL . 'dashboard');
    exit;
}

?>
