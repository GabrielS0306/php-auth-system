<aside class="sidebar">
    <div class="sidebar-top">
        <h2 class="logo">DevPanel</h2>

        <nav>
            <ul>
                <li class="<?= $activePage === 'dashboard' ? 'active' : '' ?>">
                    <a href="<?= BASE_URL ?>dashboard">Dashboard</a>
                </li>

                <li class="<?= $activePage === 'projetos' ? 'active' : '' ?>">
                    <a href="<?= BASE_URL ?>projetos">
                        <i class="fa-solid fa-diagram-project"></i>
                        Projetos
                    </a>
                </li>

                <li class="<?= $activePage === 'relatorios' ? 'active' : '' ?>">
                    <a href="<?= BASE_URL ?>relatorios">
                        <i class="fa-regular fa-chart-bar"></i>
                        Relatórios
                    </a>
                </li>

                <li class="<?= $activePage === 'configuracoes' ? 'active' : '' ?>">
                    <a href="<?= BASE_URL ?>configuracoes">
                        <i class="fa-solid fa-gear"></i>
                        Configurações
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="sidebar-bottom">
        <hr>

        <div id="perfil-container">
            <div id="perfil">
                <div id="identificacao">
                    <img src="https://i.pravatar.cc/40" alt="User">
                    <p id="nome">
                        <?= htmlspecialchars($_SESSION['usuario'] ?? '') ?>
                    </p>
                </div>
            </div>

            <div id="perfil-menu">
                <p class="email">
                    <?= htmlspecialchars($_SESSION['email'] ?? '') ?>
                </p>
                <hr>

                <a href="#">Meu Perfil</a>
                <a href="<?= BASE_URL ?>configuracoes">Configurações</a>
                <a href="<?= BASE_URL ?>logout">Sair</a>
            </div>
        </div>
    </div>
</aside>