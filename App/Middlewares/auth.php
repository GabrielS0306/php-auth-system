<?php

    // Verifica se o usuário está autenticado
if (!isset($_SESSION['user_id'])) {
    header('Location: ' . BASE_URL . 'login');
    exit;
}

?>
