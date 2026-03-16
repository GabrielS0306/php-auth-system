<aside class="sidebar">
    <!-- Seção Superior -> logo e Menu -->
    <div class="sidebar-top">
        <h2 class="logo">DevPanel</h2>
        <!-- Menu de navegação principal -->
        <nav>
            <ul>
                <li class="<?= $activePage === 'dashboard' ? 'active' : '' ?>">
                    <a href="./dashboard.php">Dashboard</a>
                </li>
                <li class="<?= $activePage === 'usuarios' ? 'active' : '' ?>">
                    <a href="./usuarios.php">
                        <i class="fa-solid fa-users"></i> 
                        Usuários
                    </a>
                </li>
                <li class="<?= $activePage === 'projetos' ? 'active' : '' ?>">
                    <a href="./projetos.php">
                        <i class="fa-solid fa-diagram-project"></i> 
                        Projetos
                    </a>
                </li>
                <li class="<?= $activePage === 'relatorios' ? 'active' : '' ?>">
                    <a href="./relatorios.php">
                        <i class="fa-solid fa-chart-line"></i> 
                        Relatórios
                    </a>
                </li>
                <li class="<?= $activePage === 'configuracoes' ? 'active' : '' ?>">
                    <a href="./configuracoes.php">
                        <i class="fa-solid fa-gear"></i> 
                        Configurações
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Seção inferior -> Perfil do usuário -->
    <div class="sidebar-bottom">
        <hr>
        <div id="perfil-container">
            <!-- Informações do perfil -->
            <div id="perfil">
                <div id="identificacao">
                    <img src="https://i.pravatar.cc/40" alt="User">
                    <p id="nome">
                        <?= htmlspecialchars($_SESSION['usuario']) ?>
                    </p>
                </div>
            </div>
            <!-- Menu de ações do perfil -->
            <div id="perfil-menu">
                <p class="email">
                    <?= htmlspecialchars($_SESSION['email']) ?>
                </p>
                <hr>
                <a href="#">Meu Perfil</a>
                <a href="./configuracoes.php">Configurações</a>
                <a href="../logout.php">Sair</a>
            </div>
        </div>
    </div>
</aside>