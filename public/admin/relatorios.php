<?php require_once __DIR__ . '/../../middlewares/admin.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <title>Relatórios</title>
    <link rel="stylesheet" href="../assets/styles/dashboard_adm.css">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <!-- Sidebar - Navegação lateral com menu principal e perfil do usuário -->
    <aside class="sidebar">
        <div class="sidebar-top">
            <h2 class="logo">DevPanel</h2>
            <!-- Barra de navegação principal -->
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
                    <li>
                        <a href="./projetos.php">
                            <i class="fa-solid fa-diagram-project"></i> 
                            Projetos
                        </a>
                    </li>
                    <li class="active">
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

        <!-- Seção inferior da sidebar com informações do usuário logado -->
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

    <!-- Conteúdo principal da página -->
    <div class="main-content">
        <!-- Barra superior com título da página e botões de ação -->
        <header class="topbar">
            <div>
                <h1>Relatórios</h1>
                <p>Visão geral do desempenho dos projetos</p>
            </div>

            <div class="top-actions">
                <button id="toggleTheme">
                    <i class="fa-solid fa-moon"></i>
                </button>
            </div>
        </header>

        <!-- Cards de estatísticas - Exibe resumo de dados dos projetos -->
        <section class="cards">
            <div class="card">
                <h3>Total de Projetos</h3>
                <p class="number">12</p>
            </div>

            <div class="card">
                <h3>Projetos Concluídos</h3>
                <p class="number">8</p>
            </div>

            <div class="card">
                <h3>Em Andamento</h3>
                <p class="number">3</p>
            </div>

            <div class="card">
                <h3>Pendentes</h3>
                <p class="number">1</p>
            </div>

            <div class="card highlight">
                <h3>Taxa de Conclusão</h3>
                <p class="number">66%</p>
            </div>
        </section>

        <!-- Seção de filtros para buscar relatórios por status e período -->
        <section class="table-section">
            <h2>Filtrar Relatórios</h2>
            <form class="settings-form">
                <div class="form-group">
                    <label>Status</label>
                    <select>
                        <option>Todos</option>
                        <option>Concluído</option>
                        <option>Em andamento</option>
                        <option>Pendente</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Período</label>
                    <select>
                        <option>Últimos 7 dias</option>
                        <option>Último mês</option>
                        <option>Último ano</option>
                    </select>
                </div>
            </form>
        </section>

        <!-- Tabela com histórico dos últimos projetos cadastrados -->
        <section class="table-section">
            <h2>Últimos Projetos</h2>
            <table>
                <thead>
                    <tr>
                        <th>Projeto</th>
                        <th>Status</th>
                        <th>Data</th>
                        <th>Responsável</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Sistema de Login</td>
                        <td>
                            <span class="status done">
                                Concluído
                            </span>
                        </td>
                        <td>25/02/2026</td>
                        <td>Gabriel</td>
                    </tr>

                    <tr>
                        <td>API REST</td>
                        <td>
                            <span class="status progress">
                                Em andamento
                            </span>
                        </td>
                        <td>26/02/2026</td>
                        <td>João</td>
                    </tr>

                    <tr>
                        <td>DevPanel</td>
                        <td>
                            <span class="status pending">
                                Pendente
                            </span>
                        </td>
                        <td>27/02/2026</td>
                        <td>Maria</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Seção de ações rápidas para acesso direto às funcionalidades principais -->
        <section class="table-section">
            <h2>Ações rápidas</h2>
            <div class="quick-actions">
                <div class="quick-card">
                    <h3>Novo Projeto</h3>
                    <p>Crie um novo projeto no sistema.</p>
                    <a href="projetos.php">
                        Criar
                    </a>
                </div>

                <div class="quick-card">
                    <h3>Ver Relatórios</h3>
                    <p>Visualize relatórios completos.</p>
                    <a href="#">
                        Abrir
                    </a>
                </div>

                <div class="quick-card">
                    <h3>Gerenciar Usuários</h3>
                    <p>Controle os usuários do sistema.</p>
                    <a href="usuarios.php">
                        Gerenciar
                    </a>
                </div>
            </div>
        </section>
    </div>

    <script src="../assets/Js/toggleTheme.js"></script>
</body>
</html>