<?php require_once __DIR__ . '/../../middlewares/admin.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Configurações</title>
    <link rel="stylesheet" href="../assets/styles/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
<!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="sidebar-top">
            <h2 class="logo">DevPanel</h2>
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
                    <li>
                        <a href="./relatorios.php">
                            <i class="fa-solid fa-chart-line"></i> 
                            Relatórios
                        </a>
                    </li>
                    <li class="active">
                        <a href="./configuracoes.php">
                            <i class="fa-solid fa-gear"></i> 
                            Configurações
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="sidebar-bottom">
            <hr>
            <div id="perfil">
                <div id="identificacao">
                    <img src="https://i.pravatar.cc/40">
                    <p id="nome">
                        <?= htmlspecialchars($_SESSION['usuario']) ?>
                    </p>
                </div>
            </div>
        </div>
    </aside>


    <div class="main-content">
        <!-- Topo -->
        <header class="topbar">
            <div>
                <h1>Configurações</h1>
                <p>Gerencie as configurações da conta</p>
            </div>

            <div class="top-actions">
                <button id="toggleTheme">
                    <i class="fa-solid fa-moon"></i>
                </button>
            </div>
        </header>

        <!-- Conteúdo -->
        <section class="settings-container">
            <!-- Perfil -->
            <div class="settings-card">
                <h2>Perfil</h2>
                <form class="settings-form">
                    <label>Nome</label>
                    <input type="text" value="<?= htmlspecialchars($_SESSION['usuario']) ?>">
                    <label>Email</label>
                    <input type="email" value="<?= htmlspecialchars($_SESSION['email']) ?>"
                    <button class="btn-save">Salvar Alterações</button>
                </form>
            </div>

            <!-- Segurança -->
            <div class="settings-card">
                <h2>Segurança</h2>
                <form class="settings-form">
                    <label>Senha atual</label>
                    <input type="password">
                    <label>Nova senha</label>
                    <input type="password">
                    <label>Confirmar nova senha</label>
                    <input type="password">
                    <button class="btn-save">Alterar Senha</button>
                </form>
            </div>

            <!-- Sistema -->
            <div class="settings-card">
                <h2>Sistema</h2>
                <div class="setting-option">
                    <p>Modo Escuro</p>
                    <button class="toggle-btn" id="toggleTheme">Ativar</button>
                </div>
                <div class="setting-option">
                    <p>Versão do Sistema</p>
                    <span>v1.0</span>
                </div>
            </div>

            <!-- Zona de risco -->
            <div class="settings-card">
                <h2>Zona de Risco</h2>
                <p>Excluir sua conta permanentemente.</p>
                <button class="btn-danger">Excluir Conta</button>
            </div>
        </section>  
    </div>

    <script src="../assets/Js/toggleTheme.js"></script>
</body>
</html>