<?php

$activePage = 'configuracoes';

flash('error');
flash('success');

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Configurações</title>

    <link rel="stylesheet" href="<?= asset('styles/dashboard.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>

<?php include_once __DIR__ . "/../components/user/sidebar.php"; ?>

<div class="main-content">
    <header class="topbar">
        <div>
            <h1>Configurações</h1>
            <p>Gerencie suas informações pessoais</p>
        </div>

        <div class="top-actions">
            <button id="toggleTheme" type="button">
                <i class="fa-solid fa-moon"></i>
            </button>
        </div>
    </header>

    <section class="table-section">
        <form method="POST" action="<?= BASE_URL ?>configs-user" class="settings-form">

            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" value="<?= htmlspecialchars($_SESSION['usuario'] ?? '') ?>">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?= htmlspecialchars($_SESSION['email'] ?? '') ?>">
            </div>

            <div class="form-group password-group">
                <label>Nova Senha</label>
                <div class="password-wrapper">
                    <input type="password" id="nova_senha" name="nova_senha">
                    <i class="fa-solid fa-eye toggle-password" data-target="nova_senha"></i>
                </div>
            </div>

            <div class="form-group password-group">
                <label>Confirmar Nova Senha</label>
                <div class="password-wrapper">
                    <input type="password" id="confirmar_nova_senha" name="confirmar_nova_senha">
                    <i class="fa-solid fa-eye toggle-password" data-target="confirmar_nova_senha"></i>
                </div>
            </div>

            <button type="submit" class="logout">
                <i class="fa-solid fa-floppy-disk"></i>
                Salvar Alterações
            </button>
        </form>
    </section>
</div>

<script src="<?= asset('js/configuracoes.js') ?>"></script>
<script src="<?= asset('js/perfil_content.js') ?>"></script>

</body>
</html>
