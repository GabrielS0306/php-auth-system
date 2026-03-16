<?php require_once __DIR__ . '/../../middlewares/auth.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Configurações</title>
    <link rel="stylesheet" href="../assets/styles/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>
    <!-- Barra lateral de navegação -->
    <?php include_once __DIR__ . "/../../components/user/sidebar.php"; ?>

    <!-- Conteúdo principal da página -->
    <div class="main-content">
        <!-- Barra superior com título e ações -->
        <header class="topbar">
            <!-- Texto do cabeçalho -->
            <div>
                <h1>Configurações</h1>
                <p>Gerencie suas informações pessoais</p>
            </div>

            <!-- Ações do topo (botão tema) -->
            <div class="top-actions">
                <button id="toggleTheme" type="button">
                    <i class="fa-solid fa-moon"></i>
                </button>
            </div>
        </header>

        <!-- Seção principal com formulário de configurações -->
        <section class="table-section">
            <!-- Formulário para salvar alterações de configuração -->
            <form method="POST" action="../../controllers/configs_user.php" class="settings-form">
                <!-- Campo para alterar nome -->
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nome" value="<?= htmlspecialchars($_SESSION['usuario']) ?>">
                </div>

                <!-- Campo para alterar email -->
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="<?= htmlspecialchars($_SESSION['email']) ?>">
                </div>

                <!-- Campos para alterar senha -->
                <div class="form-group password-group">
                    <label>Nova Senha</label>
                    <div class="password-wrapper">
                        <input type="password" id="nova_senha" name="nova_senha" placeholder="Digite uma nova senha">
                        <i class="fa-solid fa-eye toggle-password" data-target="nova_senha"></i>
                    </div>
                </div>

                <div class="form-group password-group">
                    <label>Confirmar Nova Senha</label>
                    <div class="password-wrapper">
                        <input type="password" id="confirmar_nova_senha" name="confirmar_nova_senha" placeholder="Confirme a nova senha">
                        <i class="fa-solid fa-eye toggle-password" data-target="confirmar_nova_senha"></i>
                    </div>
                </div>
                <!-- Botão para enviar formulário -->
                <button type="submit" class="logout">
                    <i class="fa-solid fa-floppy-disk"></i>
                    Salvar Alterações
                </button>
            </form>
        </section>
    </div>

    <script src="../assets/js/configuracoes.js"></script>
    <script src="../assets/js/perfil_content.js"></script>
</body>
</html>