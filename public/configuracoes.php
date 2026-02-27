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
    <title>Configurações</title>
    <link rel="stylesheet" href="./assets/styles/dashboard.css">
</head>
<body>

<aside class="sidebar">
    <div class="sidebar-top">
        <h2 class="logo">DevPanel</h2>
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="projetos.php">Projetos</a></li>
                <li><a href="relatorios.php">Relatórios</a></li>
                <li class="active"><a href="configuracoes.php">Configurações</a></li>
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
            <h1>Configurações</h1>
            <p>Gerencie suas informações pessoais</p>
        </div>

        <div class="top-actions">
            <button id="toggleTheme">
                <i class="fa-solid fa-moon"></i>
            </button>
        </div>
    </header>

    <section class="table-section">
        <form method="POST" action="salvar_config.php" class="settings-form">

            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" value="<?= htmlspecialchars($_SESSION['usuario']) ?>">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?= htmlspecialchars($_SESSION['email']) ?>">
            </div>

            <div class="form-group">
                <label>Nova Senha</label>
                <input type="password" name="senha" placeholder="Digite uma nova senha">
            </div>

            <button type="submit" class="logout" style="border:none; cursor:pointer;">
                <i class="fa-solid fa-floppy-disk"></i> 
                Salvar Alterações
            </button>

        </form>
    </section>

</div>

<script src="./assets/js/toggleTheme.js"></script>

</body>
</html>