<?php

    // Verifica se a sessão não foi iniciada
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Verifica se o usuário está autenticado
    if (!isset($_SESSION['user_id'])) {
        // Redireciona para a página de login se não estiver autenticado
        header("Location: ../login.php");
        exit;
    }

?>