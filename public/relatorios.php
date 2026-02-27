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
    <title>Relatórios</title>
    <link rel="stylesheet" href="./src/styles/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<aside class="sidebar">
    <div class="sidebar-top">
        <h2 class="logo">DevPanel</h2>
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="projetos.php">Projetos</a></li>
                <li class="active"><a href="relatorios.php">Relatórios</a></li>
                <li><a href="configuracoes.php">Configurações</a></li>
            </ul>
        </nav>
    </div>

    <div class="sidebar-bottom">
        <hr>
        <div id="perfil">
            <div id="identificacao">
                <img src="https://i.pravatar.cc/40" alt="User">
                <p id="nome"><?= htmlspecialchars($_SESSION['usuario']) ?></p>
            </div>
        </div>
    </div>
</aside>

<div class="main-content">

    <header class="topbar">
        <div>
            <h1>Relatórios</h1>
            <p>Visão geral do desempenho dos seus projetos</p>
        </div>

        <div class="top-actions">
            <button id="toggleTheme">
                <i class="fa-solid fa-moon"></i>
            </button>
        </div>
    </header>

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
            <p class="number">4</p>
        </div>

        <div class="card">
            <h3>Taxa de Conclusão</h3>
            <p class="number">66%</p>
        </div>
    </section>

    <section class="table-section">
        <h2>Últimos Projetos</h2>

        <table>
            <thead>
                <tr>
                    <th>Projeto</th>
                    <th>Status</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sistema de Login</td>
                    <td><span class="status done">Concluído</span></td>
                    <td>25/02/2026</td>
                </tr>
                <tr>
                    <td>API REST</td>
                    <td><span class="status progress">Em andamento</span></td>
                    <td>26/02/2026</td>
                </tr>
                <tr>
                    <td>DevPanel</td>
                    <td><span class="status pending">Pendente</span></td>
                    <td>27/02/2026</td>
                </tr>
            </tbody>
        </table>
    </section>

</div>

<script>
document.getElementById("toggleTheme").addEventListener("click", function () {
    document.body.classList.toggle("dark");
});
</script>

</body>
</html>