<?php

    require_once __DIR__ . '/../config/conexao.php';

    $stmt = $conexao->query("
    SELECT id, nome, email, role
    FROM usuarios
    ORDER BY id DESC
    ");

    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $totalUsuarios = count($usuarios);

    $totalAdmins = 0;
    $totalUsers = 0;

    foreach ($usuarios as $u) {
        if ($u['role'] === 'admin') {
            $totalAdmins++;
        } else {
            $totalUsers++;
        }
    }

    $totalProjetosAtivos = 0;
    $totalProjetosConcluidos = 0;

?>