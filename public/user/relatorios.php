<?php require_once __DIR__ . '/../../middlewares/auth.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relatórios</title>
    <link rel="stylesheet" href="../assets/styles/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <!-- Barra lateral de navegação -->
    <?php include_once __DIR__ . "/../../components/user/sidebar.php"; ?>

    <!-- Conteúdo principal da página -->
    <div class="main-content">
        <!-- Barra superior com título e ações -->
        <header class="topbar">
            <div>
                <h1>Relatórios</h1>
                <p>Visão geral do desempenho dos seus projetos</p>
            </div>

            <!-- Botões de ação na barra superior -->
            <div class="top-actions">
                <button id="toggleTheme">
                    <i class="fa-solid fa-moon"></i>
                </button>
            </div>
        </header>

        <!-- Seção de cards com estatísticas -->
        <section class="cards">
            <!-- Card: Total de Projetos -->
            <div class="card">
                <h3>Total de Projetos</h3>
                <p class="number">12</p>
            </div>

            <!-- Card: Projetos Concluídos -->
            <div class="card">
                <h3>Projetos Concluídos</h3>
                <p class="number">8</p>
            </div>

            <!-- Card: Projetos em Andamento -->
            <div class="card">
                <h3>Em Andamento</h3>
                <p class="number">4</p>
            </div>

            <!-- Card: Taxa de Conclusão -->
            <div class="card">
                <h3>Taxa de Conclusão</h3>
                <p class="number">66%</p>
            </div>
        </section>

        <!-- Seção de tabela com últimos projetos -->
        <section class="table-section">
            <h2>Últimos Projetos</h2>
            <!-- Tabela exibindo lista de projetos -->
            <table>
                <!-- Cabeçalho da tabela -->
                <thead>
                    <tr>
                        <th>Projeto</th>
                        <th>Status</th>
                        <th>Data</th>
                    </tr>
                </thead>
                
                <!-- Corpo da tabela com dados dos projetos -->
                <tbody>
                    <!-- Linha: Sistema de Login -->
                    <tr>
                        <td>Sistema de Login</td>
                        <td><span class="status done">Concluído</span></td>
                        <td>25/02/2026</td>
                    </tr>
                    <!-- Linha: API REST -->
                    <tr>
                        <td>API REST</td>
                        <td><span class="status progress">Em andamento</span></td>
                        <td>26/02/2026</td>
                    </tr>
                    <!-- Linha: DevPanel -->
                    <tr>
                        <td>DevPanel</td>
                        <td><span class="status pending">Pendente</span></td>
                        <td>27/02/2026</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>

    <script src="../assets/Js/perfil_content.js"></script>
    <script src="../assets/Js/toggleTheme.js"></script>
</body>
</html>
