<?php
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Projetos</title>
    <link rel="stylesheet" href="./src/styles/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <aside class="sidebar">
        <div class="sidebar-top">
            <h2 class="logo">DevPanel</h2>
            <nav>
                <ul>
                    <li>
                        <a href="dashboard.php">
                            Dashboard
                        </a>
                    </li>
                    <li class="active">
                        <a href="projetos.php">
                            Projetos
                        </a>
                    </li>
                    <li>
                        <a href="relatorios.php">
                            Relatórios
                        </a>
                    </li>
                    <li>
                        <a href="configuracoes.php">
                            Configurações
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="sidebar-bottom">
            <hr>
            <div id="perfil">
                <div id="identificacao">
                    <img src="https://i.pravatar.cc/40" alt="User">
                    <p id="nome">
                        <?= htmlspecialchars($_SESSION['usuario']) ?>
                    </p>
                </div>
            </div>
        </div>
    </aside>
    <div class="main-content">
        <header class="topbar">
            <div>
                <h1>Meus Projetos</h1>
                <p>Gerencie seus projetos cadastrados</p>
            </div>

            <div class="top-actions">
                <button id="toggleTheme">
                    <i class="fa-solid fa-moon"></i>
                </button>

                <a href="#" class="logout">
                    <i class="fa-solid fa-plus"></i> 
                    Novo Projeto
                </a>
            </div>
        </header>
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

    <script src="./src/Js/toggleTheme.js"></script>
</body>
</html>