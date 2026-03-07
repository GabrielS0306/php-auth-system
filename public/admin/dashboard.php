<?php require_once __DIR__ . '/../../middlewares/admin.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../assets/styles/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>
    <!-- Barra lateral de navegação -->
    <aside class="sidebar">
        <!-- Seção Superior -> logo e Menu -->
        <div class="sidebar-top">
            <h2 class="logo">DevPanel</h2>
            <!-- Menu de navegação principal -->
            <nav>
                <ul>
                    <li class="active">
                        <a href="./dashboard.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="./usuarios.php">
                            <i class="fa-solid fa-users"></i> 
                            Usuários
                        </a>
                    </li>
                    <li>
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

        <!-- Seção inferior -> Perfil do usuário -->
        <div class="sidebar-bottom">
            <hr>
            <div id="perfil-container">
                <!-- Informações do perfil -->
                <div id="perfil">
                    <div id="identificacao">
                        <img src="https://i.pravatar.cc/40" alt="User">
                        <p id="nome">
                            <?= htmlspecialchars($_SESSION['usuario']) ?>
                        </p>
                    </div>
                </div>
                <!-- Menu de ações do perfil -->
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

    <!-- Conteúdo Principal -->
    <div class="main-content">
        <!-- Barra superior com título e ações -->
        <header class="topbar">
            <div>
                <h1>Painel Administrativo</h1>
                <p>Gerencie usuários e acompanhe o sistema</p>
            </div>
            <div class="top-actions">
                <!-- Botão para alternar tema (claro/escuro) -->
                <button id="toggleTheme">
                    <i class="fa-solid fa-moon"></i>
                </button>
            </div>
        </header>

        <!-- Cards de Estatísticas -->
        <section class="cards">
            <div class="card">
                <h3>Total de Usuários</h3>
                <p class="number">24</p>
            </div>
            <div class="card">
                <h3>Administradores</h3>
                <p class="number">3</p>
            </div>
            <div class="card">
                <h3>Projetos Ativos</h3>
                <p class="number">12</p>
            </div>
            <div class="card highlight">
                <h3>Projetos Concluídos</h3>
                <p class="number">8</p>
            </div>
        </section>

        <!-- Tabela -> Últimos usuários registrados -->
        <section class="table-section">
            <h2>Últimos Usuários Registrados</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Tipo</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Gabriel</td>
                        <td>gabriel@email.com</td>
                        <td>
                            <span class="status done">Admin</span>
                        </td>
                        <td>05/03/2026</td>
                    </tr>
                    <tr>
                        <td>Maria</td>
                        <td>maria@email.com</td>
                        <td>
                            <span class="status progress">User</span>
                        </td>
                        <td>04/03/2026</td>
                    </tr>
                    <tr>
                        <td>João</td>
                        <td>joao@email.com</td>
                        <td>
                            <span class="status progress">User</span>
                        </td>
                        <td>03/03/2026</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Seção -> Ações rápidas de gerenciamento -->
        <section class="table-section">
            <h2>Ações rápidas</h2>
            <div class="quick-actions">
                <!-- Card para gerenciamento de usuários -->
                <div class="quick-card">
                    <h3>Gerenciar Usuários</h3>
                    <p>Adicionar ou remover usuários</p>
                    <a href="usuarios.php">Abrir</a>
                </div>
                <!-- Card para visualizar relatórios -->
                <div class="quick-card">
                    <h3>Ver Relatórios</h3>
                    <p>Desempenho dos projetos</p>
                    <a href="relatorios.php">Abrir</a>
                </div>
                <!-- Card para configurações do sistema -->
                <div class="quick-card">
                    <h3>Configurações</h3>
                    <p>Ajustar sistema</p>
                    <a href="configuracoes.php">Abrir</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Script de funcionalidades do dashboard -->
    <script src="../assets/Js/dashboard.js"></script>
</body>
</html>