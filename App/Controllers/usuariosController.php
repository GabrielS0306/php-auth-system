<?php

    namespace App\Controllers;

    class UsuariosController {
        public function index() {
            require __DIR__ . '/../../config/conexao.php';

            $stmt = $conexao->query("
                SELECT id, nome, email, role
                FROM usuarios
                ORDER BY id DESC
            ");

            $usuarios = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            $totalAdmins = 0;
            $totalUsers = 0;

            foreach ($usuarios as $u) {
                if ($u['role'] == 'admin') {
                    $totalAdmins++;
                } else {
                    $totalUsers++;
                }
            }

            // manda pra view
            require __DIR__ . '/../../Views/admin/usuarios.php';
        }
    }

?>