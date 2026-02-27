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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- css -->
    <link rel="stylesheet" href="./src/styles/dashboard.css">
    <!-- icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <aside class="sidebar">
        <div class="sidebar-top">
            <h2 class="logo">DevPanel</h2>
            <nav>
                <ul>
                    <li class="active">
                        <a href="">Dashboard</a>
                    </li>
                    <li>
                        <a href="./projetos.php">
                            Projetos
                        </a>
                    </li>
                    <li>
                        <a href="./relatorios.php">
                            Relatórios
                        </a>
                    </li>
                    <li>
                        <a href="./configuracoes.php">
                            Configurações
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="sidebar-bottom">
            <hr>
            <div id="perfil-container">
                <div id="perfil">
                    <div id="identificacao">
                        <img src="https://i.pravatar.cc/40" alt="User">
                        <p id="nome">
                            <?= htmlspecialchars($_SESSION['usuario']) ?>
                        </p>
                    </div>
                </div>
                <div id="perfil-menu">
                    <p class="email">
                        <?= htmlspecialchars($_SESSION['email']) ?>
                    </p>
                    <hr>
                    <a href="#">
                        Meu Perfil
                    </a>
                    <a href="./configuracoes.php">
                        Configurações
                    </a>
                    <a href="logout.php">Sair</a>
                </div>
            </div>
        </div>
    </aside>
    <div class="main-content">
        <header class="topbar">
            <div>
                <h1>Dashboard</h1>
                <p>
                    Bem-vindo,  
                    <?= htmlspecialchars($_SESSION['usuario']) ?> 
                </p>
            </div>
            <div class="top-actions">
                <button id="toggleTheme">
                    <i class="fa-solid fa-moon"></i>
                </button>
                <div class="user">
                    <a href="logout.php" class="logout" onclick="return confirm('Tem certeza que deseja sair?')">
                        <i class="fa-solid fa-right-from-bracket"></i> 
                        Sair
                    </a>
                </div>
            </div>
        </header>
        <section class="cards">
            <div class="card">
                <h3>Projetos</h3>
                <p class="number">12</p>
            </div>
            <div class="card">
                <h3>Tarefas</h3>
                <p class="number">34</p>
            </div>
            <div class="card">
                <h3>Mensagens</h3>
                <p class="number">5</p>
            </div>
            <div class="card">
                <h3>Concluídos</h3>
                <p class="number">8</p>
            </div>
        </section>
        <section class="table-section">
            <h2>Atividades Recentes</h2>
            <table>
                <thead>
                    <tr>
                        <th>Projeto</th>
                        <th>Status</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- done / progress / pending -->
                    <tr>
                        <td>Site Portfólio</td>
                        <td><span class="status done">Concluído</span></td>
                        <td>18/02/2026</td>
                    </tr>
                    <tr>
                        <td>Sistema Login</td>
                        <td><span class="status progress">Em andamento</span></td>
                        <td>17/02/2026</td>
                    </tr>
                    <tr>
                        <td>Landing Page</td>
                        <td><span class="status pending">Pendente</span></td>
                        <td>15/02/2026</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>

    <script src="./src/Js/dashboard.js"></script>
</body>
</html>