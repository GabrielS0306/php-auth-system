<?php
    $pageTitle = $pageTitle ?? "Painel Administrativo";
    $pageDescription = $pageDescription ?? "Gerencie usuários e acompanhe o sistema";
?>

<header class="topbar">
    <div>
        <h1><?= $pageTitle ?></h1>
        <p><?= $pageDescription ?></p>
    </div>

    <div class="top-actions">
        <button id="toggleTheme">
            <i class="fa-solid fa-moon"></i>
        </button>

        <?php if (($activePage ?? '') === 'projetos'): ?>
            <a href="#" class="logout">
                <i class="fa-solid fa-plus"></i> 
                Novo Projeto
            </a>
        <?php endif; ?>
    </div>
</header>