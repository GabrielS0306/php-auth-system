<?php require_once __DIR__ . '/../../middlewares/auth.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- css -->
    <link rel="stylesheet" href="../assets/styles/dashboard.css">
    <!-- icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>
    <!-- SIDEBAR - Menu lateral de navegação -->
    <aside class="sidebar">
        <!-- Seção superior da sidebar com logo e menu de navegação -->
        <div class="sidebar-top">
            <h2 class="logo">DevPanel</h2>
            <!-- Menu de navegação principal -->
            <nav>
                <ul>
                    <li class="active">
                        <a href="">Dashboard</a>
                    </li>
                    <li>
                        <a href="./projetos.php">Projetos</a>
                    </li>
                    <li>
                        <a href="./relatorios.php">Relatórios</a>
                    </li>
                    <li>
                        <a href="./configuracoes.php">Configurações</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Seção inferior da sidebar com informações do usuário -->
        <div class="sidebar-bottom">
            <hr>
            <!-- Container do perfil do usuário -->
            <div id="perfil-container">
                <!-- Exibição das informações do usuário (foto e nome) -->
                <div id="perfil">
                    <div id="identificacao">
                        <img src="https://i.pravatar.cc/40" alt="User">
                        <p id="nome">
                            <?= htmlspecialchars($_SESSION['usuario']) ?>
                        </p>
                    </div>
                </div>

                <!-- Menu suspenso com opções do perfil -->
                <div id="perfil-menu">
                    <p class="email">
                        <?= htmlspecialchars($_SESSION['email']) ?>
                    </p>
                    <hr>
                    <a href="#">Meu Perfil</a>
                    <a href="./configuracoes.php">Configurações</a>
                    <a href="../logout.php">Sair</a>
                </div>
            </div>
        </div>
    </aside>

    <!-- CONTEÚDO PRINCIPAL -->
    <div class="main-content">
        <!-- HEADER - Barra superior com título e ações -->
        <header class="topbar">
            <!-- Seção esquerda do header com título e saudação -->
            <div>
                <h1>Dashboard</h1>
                <p>
                    Bem-vindo,
                    <?= htmlspecialchars($_SESSION['usuario']) ?>
                </p>
            </div>

            <!-- Seção direita do header com botões de ação -->
            <div class="top-actions">
                <!-- Botão para alternar tema (claro/escuro) -->
                <button id="toggleTheme">
                    <i class="fa-solid fa-moon"></i>
                </button>

                <!-- Seção do usuário com botão de logout -->
                <div class="user">
                    <a href="../logout.php" class="logout" onclick="return confirm('Tem certeza que deseja sair?')">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Sair
                    </a>
                </div>
            </div>
        </header>

        <!-- CARDS - Seção de estatísticas em cards -->
        <section class="cards">
            <!-- Card de projetos -->
            <div class="card">
                <h3>Projetos</h3>
                <p class="number">12</p>
            </div>

            <!-- Card de tarefas -->
            <div class="card">
                <h3>Tarefas</h3>
                <p class="number">34</p>
            </div>

            <!-- Card de mensagens -->
            <div class="card">
                <h3>Mensagens</h3>
                <p class="number">5</p>
            </div>

            <!-- Card de atividades concluídas (destaque) -->
            <div class="card highlight">
                <h3>Concluídos</h3>
                <p class="number">8</p>
            </div>
        </section>

        <!-- TABELA - Seção de atividades recentes -->
        <section class="table-section">
            <h2>Atividades Recentes</h2>
            <!-- Tabela com histórico de atividades -->
            <table>
                <!-- Cabeçalho da tabela -->
                <thead>
                    <tr>
                        <th>Projeto</th>
                        <th>Status</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <!-- Corpo da tabela com dados de atividades -->
                <tbody>
                    <!-- Linha 1: Projeto concluído -->
                    <tr>
                        <td>Site Portfólio</td>
                        <td><span class="status done">Concluído</span></td>
                        <td>18/02/2026</td>
                    </tr>
                    <!-- Linha 2: Projeto em andamento -->
                    <tr>
                        <td>Sistema Login</td>
                        <td><span class="status progress">Em andamento</span></td>
                        <td>17/02/2026</td>
                    </tr>
                    <!-- Linha 3: Projeto pendente -->
                    <tr>
                        <td>Landing Page</td>
                        <td><span class="status pending">Pendente</span></td>
                        <td><?php echo date('d/m/Y'); ?></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>

    <script src="../assets/Js/dashboard.js"></script>
</body>
</html>