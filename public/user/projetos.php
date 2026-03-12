<?php require_once __DIR__ . '/../../middlewares/auth.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Projetos</title>
    <link rel="stylesheet" href="../assets/styles/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <!-- Barra lateral de navegação -->
    <aside class="sidebar">
        <!-- Topo da sidebar com logo e menu -->
        <div class="sidebar-top">
            <h2 class="logo">DevPanel</h2>
            <!-- Menu de navegação principal -->
            <nav>
                <ul>
                    <!-- Item de menu: Dashboard -->
                    <li>
                        <a href="dashboard.php">
                            Dashboard
                        </a>
                    </li>
                    <!-- Item de menu: Projetos -->
                    <li class="active">
                        <a href="projetos.php">
                            <i class="fa-solid fa-diagram-project"></i>
                            Projetos
                        </a>
                    </li>
                    <!-- Item de menu: Relatórios -->
                    <li>
                        <a href="relatorios.php">
                            <i class="fa-regular fa-chart-bar"></i>
                            Relatórios
                        </a>
                    </li>
                    <!-- Item de menu: Configurações (ativo) -->
                    <li>
                        <a href="configuracoes.php">
                            <i class="fa-solid fa-gear"></i>
                            Configurações
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Rodapé da sidebar com informações do usuário -->
        <div class="sidebar-bottom">
            <hr>
            <div id="perfil">
                <!-- Identificação do usuário logado -->
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

    <script src="../assets/Js/toggleTheme.js"></script>
</body>
</html>