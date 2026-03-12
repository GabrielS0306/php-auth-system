<?php 

    require_once __DIR__ . '/../../middlewares/admin.php'; 
    require_once __DIR__ . '/../../controllers/usuariosController.php'; 

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../assets/styles/dashboard_adm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>
    <!-- Barra lateral de navegação -->
    <?php require_once __DIR__ . '/../../components/sidebar.php'; ?>
    
    <!-- Conteúdo Principal -->
    <div class="main-content">
        <!-- Barra superior com título e ações -->
        <?php require_once __DIR__ . '/../../components/topbar.php'; ?>

        <!-- Cards de Estatísticas -->
        <section class="cards">
            <div class="card">
                <h3>Total de Usuários</h3>
                <p class="number">
                    <?= $totalUsuarios ?>
                </p>
            </div>
            <div class="card">
                <h3>Administradores</h3>
                <p class="number">
                    <?= $totalAdmins ?>
                </p>
            </div>
            <div class="card">
                <h3>Projetos Ativos</h3>
                <p class="number">
                    <?= $totalProjetosAtivos ?>
                </p>
            </div>
            <div class="card highlight">
                <h3>Projetos Concluídos</h3>
                <p class="number">
                    <?= $totalProjetosConcluidos ?>
                </p>
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
                        <td><?= htmlspecialchars($_SESSION['usuario']) ?></td>
                        <td><?= htmlspecialchars($_SESSION['email']) ?></td>
                        <td>
                            <span class="status done"><?= htmlspecialchars($_SESSION['role']) ?></span>
                        </td>
                        <td><?php echo date('d/m/Y'); ?></td>
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