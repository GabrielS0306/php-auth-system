<?php $activePage = 'projetos'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Projetos</title>
    <link rel="stylesheet" href="<?= asset('styles/dashboard.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <!-- Barra lateral de navegação -->
    <?php include_once __DIR__ . "/../components/user/sidebar.php"; ?>

    <!-- Conteúdo principal da página -->
    <div class="main-content">
        <!-- Cabeçalho com título e ações -->
        <header class="topbar">
            <div>
                <h1>Meus Projetos</h1>
                <p>Gerencie seus projetos cadastrados</p>
            </div>

            <!-- Botões de ação do cabeçalho -->
            <div class="top-actions">
                <!-- Botão para alternar tema -->
                <button id="toggleTheme">
                    <i class="fa-solid fa-moon"></i>
                </button>

                <!-- Botão para criar novo projeto -->
                <a href="#" class="logout">
                    <i class="fa-solid fa-plus"></i> 
                    Novo Projeto
                </a>
            </div>
        </header>
        <!-- Seção com cards dos projetos -->
        <section class="cards">
            <!-- Card do projeto: Sistema de Login -->
            <div class="card">
                <h3>Sistema de Login</h3>
                <p>Projeto de autenticação com PHP e MySQL.</p>
                <span class="status done">
                    Concluído
                </span>
            </div>

            <!-- Card do projeto: DevPanel -->
            <div class="card">
                <h3>DevPanel</h3>
                <p>Painel administrativo com dashboard.</p>
                <span class="status progress">
                    Em andamento
                </span>
            </div>

            <!-- Card do projeto: API REST -->
            <div class="card">
                <h3>API REST</h3>
                <p>Criação de API usando PHP puro.</p>
                <span class="status pending">
                    Pendente
                </span>
            </div>
        </section>
    </div>

    <script src="<?= asset('js/perfil_content.js') ?>"></script>
    <script src="<?= asset('js/toggleTheme.js') ?>"></script>
</body>
</html>
