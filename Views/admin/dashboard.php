<?php

$activePage = 'dashboard';
$usuarios = $usuarios ?? [];
$totalUsuarios = $totalUsuarios ?? 0;
$totalAdmins = $totalAdmins ?? 0;
$totalProjetosAtivos = $totalProjetosAtivos ?? 0;
$totalProjetosConcluidos = $totalProjetosConcluidos ?? 0;

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="<?= asset('styles/dashboard_adm.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>
    <!-- Barra lateral de navegação -->
    <?php 
        require_once __DIR__ . '/../components/admin/sidebar.php';
    ?>
    
    <!-- Conteúdo Principal -->
    <div class="main-content">
        <!-- Barra superior com título e ações -->
        <?php require_once __DIR__ . '/../components/admin/topbar.php'; ?>

        <!-- Cards de Estatísticas -->
        <section class="cards">
            <div class="card">
                <h3>Total de Usuários</h3>
                <p class="number">
                    <?= $totalUsuarios ?>
                </p>
            </div>

            <div class="card">
                <h3>Administradores</h3>
                <p class="number">
                    <?= $totalAdmins ?>
                </p>
            </div>

            <div class="card">
                <h3>Projetos Ativos</h3>
                <p class="number">
                    <?= $totalProjetosAtivos ?>
                </p>
            </div>

            <div class="card highlight">
                <h3>Projetos Concluídos</h3>
                <p class="number">
                    <?= $totalProjetosConcluidos ?>
                </p>
            </div>
        </section>

        <!-- Tabela -> Últimos usuários registrados -->
        <?php 
            $ultimosUsuarios = TRUE;
            require_once __DIR__ . '/../components/admin/table.php';
        ?>

        <!-- Seção -> Ações rápidas de gerenciamento -->
        <section class="table-section">
            <h2>Ações rápidas</h2>
            <div class="quick-actions">
                <!-- Card para gerenciamento de usuários -->
                <div class="quick-card">
                    <h3>Gerenciar Usuários</h3>
                    <p>Adicionar ou remover usuários</p>
                    <a href="<?= BASE_URL ?>admin/usuarios">Abrir</a>
                </div>
                <!-- Card para visualizar relatórios -->
                <div class="quick-card">
                    <h3>Ver Relatórios</h3>
                    <p>Desempenho dos projetos</p>
                    <a href="<?= BASE_URL ?>admin/relatorios">Abrir</a>
                </div>
                <!-- Card para configurações do sistema -->
                <div class="quick-card">
                    <h3>Configurações</h3>
                    <p>Ajustar sistema</p>
                    <a href="<?= BASE_URL ?>admin/configuracoes">Abrir</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Script de funcionalidades do dashboard -->
    <script src="<?= asset('js/dashboard.js') ?>"></script>
</body>
</html>
