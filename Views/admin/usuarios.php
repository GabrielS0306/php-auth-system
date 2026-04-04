<?php

$activePage = 'usuarios';
$usuarios = $usuarios ?? [];
$totalUsuarios = $totalUsuarios ?? count($usuarios);
$totalAdmins = $totalAdmins ?? 0;
$totalUsers = $totalUsers ?? 0;

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Usuários</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/dashboard_adm.css">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <!-- Menu lateral com navegação e perfil do usuário -->
    <?php 
        require_once __DIR__ . '/../components/admin/sidebar.php';
    ?>

    <!-- Conteúdo principal -->
    <div class="main-content">
        <!-- Barra superior com título e ações -->
        <?php 
            $pageTitle = "Gerenciamento de usuários";
            $pageDescription = "Gerencie os usuário do sistema";
            require_once __DIR__ . '/../components/admin/topbar.php';
        ?>

        <!-- Cards com estatísticas de usuários -->
        <section class="cards">
            <!-- Card total de usuários -->
            <div class="card">
                <h3>Total de Usuários</h3>
                <p class="number">
                    <?= $totalUsuarios ?>
                </p>
            </div>

            <!-- Card quantidade de admins -->
            <div class="card">
                <h3>Admins</h3>
                <p class="number">
                    <?= $totalAdmins ?>
                </p>
            </div>

            <!-- Card quantidade de usuários comuns -->
            <div class="card">
                <h3>Usuários</h3>
                <p class="number">
                    <?= $totalUsers ?>
                </p>
            </div>
        </section>

        <!-- Seção de tabela com lista de usuários -->
        <section class="table-section">
            <!-- Cabeçalho da seção com título e botão de novo usuário -->
            <div style="display:flex; justify-content:space-between; align-items:center;">
                <h2>Lista de Usuários</h2>
                <a href="#" class="logout">
                    <i class="fa fa-plus"></i> 
                    Novo Usuário
                </a>
            </div>

            <!-- Tabela com dados dos usuários -->
            <?php 
                $ultimosUsuarios = FALSE;
                require_once __DIR__ . '/../components/admin/table.php';
            ?>
        </section>
    </div>

    <script src="<?= asset('js/toggleTheme.js') ?>"></script>
</body>
</html>
