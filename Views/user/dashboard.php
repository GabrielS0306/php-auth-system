<?php $activePage = 'dashboard'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <link rel="stylesheet" href="<?= asset('styles/dashboard.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>

<?php include_once __DIR__ . "/../components/user/sidebar.php"; ?>

<div class="main-content">
    <header class="topbar">
        <div>
            <h1>Dashboard</h1>
            <p>Bem-vindo, <?= htmlspecialchars($_SESSION['usuario'] ?? '') ?></p>
        </div>

        <div class="top-actions">
            <button id="toggleTheme">
                <i class="fa-solid fa-moon"></i>
            </button>

            <a href="<?= BASE_URL ?>logout" class="logout"
                onclick="return confirm('Tem certeza que deseja sair?')">
                <i class="fa-solid fa-right-from-bracket"></i>
                Sair
            </a>
        </div>
    </header>

    <!-- resto igual -->
</div>

<script src="<?= asset('js/dashboard.js') ?>"></script>
<script src="<?= asset('js/perfil_content.js') ?>"></script>

</body>
</html> 
