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
    <!-- css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/dashboard_adm.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <!-- Sidebar -->
    <?php
        require_once __DIR__ . '/../components/admin/sidebar.php';
    ?>

    <main class="main-content">
        <!-- Topbar -->
        <?php
            $pageTitle = "Configurações do Administrador";
            $pageDescription = "Gerencie as configurações do sistema";
        require_once __DIR__ . '/../components/admin/topbar.php';
        ?>

        <section class="settings-container">
            <div class="settings-card">
                <h2>Perfil</h2>

                <form class="settings-form">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" value="<?= htmlspecialchars($_SESSION['usuario']) ?>">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" value="<?= htmlspecialchars($_SESSION['email']) ?>">
                    </div>

                    <button class="btn-save">
                        Salvar Alterações
                    </button>
                </form>
            </div>

            <div class="settings-card">
                <h2>Segurança</h2>

                <form class="settings-form">
                    <div class="form-group">
                        <label>Senha atual</label>
                        <input type="password">
                    </div>

                    <div class="form-group">
                        <label>Nova senha</label>
                        <input type="password">
                    </div>

                    <div class="form-group">
                        <label>Confirmar nova senha</label>
                        <input type="password">
                    </div>

                    <button class="btn-save">
                        Alterar Senha
                    </button>
                </form>
            </div>



            <div class="settings-card">
                <h2>Sistema</h2>

                <div class="option">
                    <p>Modo Escuro</p>

                    <button class="btn-save" id="toggleThemeBtn">
                        Alternar
                    </button>
                </div>

                <div class="option version">
                    <p>Versão do Sistema</p>
                    <span>v1.0</span>
                </div>
            </div>



            <div class="settings-card">
                <h2>Zona de Risco</h2>
                <p>
                    Excluir sua conta permanentemente.
                    Essa ação não poderá ser desfeita.
                </p>

                <button class="logout">
                <i class="fa-solid fa-trash"></i>
                    Excluir Conta
                </button>
            </div>
        </section>
    </main>

    <script src="<?= asset('js/toggleTheme.js') ?>"></script>
</body>
</html>
