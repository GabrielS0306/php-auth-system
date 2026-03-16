<aside class="sidebar">
    <!-- Seção superior da sidebar com logo e menu de navegação -->
    <div class="sidebar-top">
        <h2 class="logo">DevPanel</h2>
        <!-- Menu de navegação principal -->
        <nav>
            <ul>
                <!-- Item de menu: Dashboard -->
                <li class="active">
                    <a href="dashboard.php">
                        Dashboard
                    </a>
                </li>
                <!-- Item de menu: Projetos -->
                <li>
                    <a href="projetos.php">
                        <i class="fa-solid fa-diagram-project"></i>
                        Projetos
                    </a>
                </li>
                <!-- Item de menu: Relatórios -->
                <li>
                    <a href="relatorios.php">
                        <i class="fa-regular fa-chart-bar"></i>
                        Relatórios
                    </a>
                </li>
                <!-- Item de menu: Configurações (ativo) -->
                <li>
                    <a href="configuracoes.php">
                        <i class="fa-solid fa-gear"></i>
                        Configurações
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Seção inferior da sidebar com informações do usuário -->
    <div class="sidebar-bottom">
        <hr>
        <!-- Container do perfil do usuário -->
        <div id="perfil-container">
            <!-- Exibição das informações do usuário (foto e nome) -->
            <div id="perfil">
                <div id="identificacao">
                    <img src="https://i.pravatar.cc/40" alt="User">
                    <p id="nome">
                        <?= htmlspecialchars($_SESSION['usuario']) ?>
                    </p>
                </div>
            </div>

            <!-- Menu suspenso com opções do perfil -->
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