<?php $activePage = 'projetos'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Projetos</title>
    <!-- css -->
    <link rel="stylesheet" href="<?= asset('styles/dashboard_adm.css') ?>">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <!-- Barra lateral -->
    <?php 
        require_once __DIR__ . '/../components/admin/sidebar.php';
    ?>
    
    <!-- Conteúdo principal da página -->
    <div class="main-content">
        <!-- Barra superior (TopBar) com título e ações -->
        <?php require_once __DIR__ . '/../components/admin/topbar.php'; ?>
        
        <!-- Seção de cards exibindo os projetos -->
        <section class="cards">
            <div class="card">
                <h3>Sistema de Login</h3>
                <p>Projeto de autenticação com PHP e MySQL.</p>
                <span class="status done">
                    Concluído
                </span>
            </div>

            <div class="card">
                <h3>DevPanel</h3>
                <p>Painel administrativo com dashboard.</p>
                <span class="status progress">
                    Em andamento
                </span>
            </div>

            <div class="card">
                <h3>API REST</h3>
                <p>Criação de API usando PHP puro.</p>
                <span class="status pending">
                    Pendente
                </span>
            </div>
        </section>
    </div>

    <!-- Script para funcionalidade de alternância de tema -->
    <script src="<?= asset('js/toggleTheme.js') ?>"></script>
</body>
</html>
