<?php

    // Carrega o middleware de autenticação
    require __DIR__ . '/auth.php';

    // Verifica se o usuário está autenticado e possui role de admin
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        // Redireciona para o dashboard do usuário comum se não for admin
        header("Location: /user/dashboard.php");
        exit;
    }

?>