<?php

    namespace App\Controllers;

    class AdminController {
        public function tornarAdmin() {

            // segurança
            if (($_SESSION['role'] ?? null) !== 'admin') {
                header("Location: " . BASE_URL . "dashboard");
                exit;
            }

            if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
                header("Location: " . BASE_URL . "admin");
                exit;
            }

            $id = (int) $_GET['id'];

            require __DIR__ . '/../../config/conexao.php';

            $stmt = $conexao->prepare("UPDATE usuarios SET role = 'admin' WHERE id = ?");
            $stmt->execute([$id]);

            header("Location: " . BASE_URL . "admin");
            exit;
        }
    }

?>
