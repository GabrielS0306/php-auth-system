<?php

    $pageTitle = $pageTitle ?? "Painel Administrativo";
    $pageDescription = $pageDescription ?? "Gerencie usuários e acompanhe o sistema";

    // Ajuste para admin/projetos.php
    if (
        isset($_SERVER['SCRIPT_NAME']) &&
        strpos($_SERVER['SCRIPT_NAME'], '/admin/projetos.php') !== false
    ) {
        $pageTitle = "Meus Projetos";
        $pageDescription = "Gerencie seus projetos cadastrados";
    }

?>
<header class="topbar">
    <!-- Informações da página -->
    <div>
        <h1><?= $pageTitle ?></h1>
        <p><?= $pageDescription ?></p>
    </div>

    <!-- Botões de ação do topo -->
    <div class="top-actions">
        <!-- Botão para alternar tema (claro/escuro) -->
        <button id="toggleTheme">
            <i class="fa-solid fa-moon"></i>
        </button>

        <!-- Botão para criar novo projeto -->
        <?php
            if (
                isset($_SERVER['SCRIPT_NAME']) &&
                strpos($_SERVER['SCRIPT_NAME'], '/admin/projetos.php') !== false
            ): 
        ?>
            <a href="#" class="logout">
                <i class="fa-solid fa-plus"></i> 
                Novo Projeto
            </a>
        <?php endif; ?>
    </div>
</header>