<?php require_once __DIR__ . '/../../middlewares/admin.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Projetos</title>
    <!-- css -->
    <link rel="stylesheet" href="../assets/styles/dashboard_adm.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <!-- Barra lateral -->
    <?php require_once __DIR__ . '/../../components/sidebar.php'; ?>
    
    <!-- Conteúdo principal da página -->
    <div class="main-content">
        <!-- Barra superior (TopBar) com título e ações -->
        <header class="topbar">
            <!-- Informações da página -->
            <div>
                <h1>Meus Projetos</h1>
                <p>Gerencie seus projetos cadastrados</p>
            </div>

            <!-- Botões de ação do topo -->
            <div class="top-actions">
                <!-- Botão para alternar tema (claro/escuro) -->
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
    <script src="../assets/Js/toggleTheme.js"></script>
</body>
</html>