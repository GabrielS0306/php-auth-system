<header class="topbar">
    <div>
        <h1><?= $pageTitle ?? "Painel Administrativo" ?></h1>
        <p><?= $pageDescription ?? 'Gerencie usuários e acompanhe o sistema' ?></p>
    </div>
    <div class="top-actions">
        <!-- Botão para alternar tema (claro/escuro) -->
        <button id="toggleTheme">
            <i class="fa-solid fa-moon"></i>
        </button>
    </div>
</header>