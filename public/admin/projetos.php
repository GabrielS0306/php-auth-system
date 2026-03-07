<?php require_once __DIR__ . '/../../middlewares/admin.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Projetos</title>
    <!-- css -->
    <link rel="stylesheet" href="../assets/styles/dashboard.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <!-- Barra lateral -->
    <aside class="sidebar">
        <!-- Seção superior da sidebar -->
        <div class="sidebar-top">
            <h2 class="logo">DevPanel</h2>
            <!-- Menu de navegação principal -->
            <nav>
                <ul>
                    <li>
                        <a href="./dashboard.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="./usuarios.php">
                            <i class="fa-solid fa-users"></i> 
                            Usuários
                        </a>
                    </li>
                    <!-- Item ativo (página atual) -->
                    <li class="active">
                        <a href="./projetos.php">
                            <i class="fa-solid fa-diagram-project"></i> 
                            Projetos
                        </a>
                    </li>
                    <li>
                        <a href="./relatorios.php">
                            <i class="fa-solid fa-chart-line"></i> 
                            Relatórios
                        </a>
                    </li>
                    <li>
                        <a href="./configuracoes.php">
                            <i class="fa-solid fa-gear"></i> 
                            Configurações
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Seção inferior da sidebar com identificação do usuário -->
        <div class="sidebar-bottom">
            <hr>
            <div id="perfil">
                <!-- Informações do usuário logado -->
                <div id="identificacao">
                    <img src="https://i.pravatar.cc/40" alt="User">
                    <p id="nome">
                        <?= htmlspecialchars($_SESSION['usuario']) ?>
                    </p>
                </div>
            </div>
        </div>
    </aside>
    
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