<?php 

    require_once __DIR__ . '/../../middlewares/admin.php';
    require_once __DIR__ . '/../../config/conexao.php'; 

    // Buscando usuarios do banco
    $stmt = $conexao->query("
        SELECT id, nome, email, role
        FROM usuarios
        ORDER BY id DESC
    ");

    // Transformando resultado em array associativo
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Usuários</title>
    <link rel="stylesheet" href="../assets/styles/dashboard.css">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <!-- Menu lateral com navegação e perfil do usuário -->
    <aside class="sidebar">
        <!-- Topo da barra lateral com logo e menu de navegação -->
        <div class="sidebar-top">
            <h2 class="logo">DevPanel</h2>
            <!-- Menu principal de navegação -->
            <nav>
                <ul>
                    <li>
                        <a href="./dashboard.php">Dashboard</a>
                    </li>
                    <!-- Item ativo indicando página atual -->
                    <li class="active">
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
                    <li>
                        <a href="./configuracoes.php">
                            <i class="fa-solid fa-gear"></i> 
                            Configurações
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Rodapé da barra lateral com perfil do usuário -->
        <div class="sidebar-bottom">
            <hr>
            <div id="perfil">
                <!-- Identificação do usuário logado -->
                <div id="identificacao">
                    <img src="https://i.pravatar.cc/40" alt="User">
                    <p id="nome">
                        <?= htmlspecialchars($_SESSION['usuario']) ?>
                    </p>
                </div>
            </div>
        </div>
    </aside>

    <!-- Conteúdo principal -->
    <div class="main-content">
        <!-- Barra superior com título e ações -->
        <header class="topbar">
            <div>
                <h1>Usuários</h1>
                <p>Gerencie os usuários do sistema</p>
            </div>
            <!-- Ações do topo (alternar tema) -->
            <div class="top-actions">
                <button id="toggleTheme">
                    <i class="fa-solid fa-moon"></i>
                </button>
            </div>
        </header>

        <!-- Cards com estatísticas de usuários -->
        <section class="cards">
            <!-- Card total de usuários -->
            <div class="card">
                <h3>Total de Usuários</h3>
                <p class="number">
                    <?= count($usuarios) ?>
                </p>
            </div>

            <!-- Card quantidade de admins -->
            <div class="card">
                <h3>Admins</h3>
                <p class="number">
                    <?= count(array_filter($usuarios, fn($u) => $u['role'] === 'admin')) ?>
                </p>
            </div>

            <!-- Card quantidade de usuários comuns -->
            <div class="card">
                <h3>Usuários</h3>
                <p class="number">
                    <?= count(array_filter($usuarios, fn($u) => $u['role'] === 'user')) ?>
                </p>
            </div>
        </section>

        <!-- Seção de tabela com lista de usuários -->
        <section class="table-section">
            <!-- Cabeçalho da seção com título e botão de novo usuário -->
            <div style="display:flex; justify-content:space-between; align-items:center;">
                <h2>Lista de Usuários</h2>
                <a href="criar_usuario.php" class="logout">
                    <i class="fa fa-plus"></i> Novo Usuário
                </a>
            </div>

            <!-- Tabela com dados dos usuários -->
            <table>
                <!-- Cabeçalho da tabela -->
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Tipo</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <!-- Corpo da tabela com loop dos usuários -->
                <tbody>
                    <?php foreach($usuarios as $usuario): ?>
                        <tr>
                            <td>
                                <?= $usuario['id'] ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($usuario['nome']) ?>
                            </td>
                            <td>
                                <?= htmlspecialchars($usuario['email']) ?>
                            </td>
                            <!-- Cell com status do tipo de usuário -->
                            <td>
                                <?php if($usuario['role'] === 'admin'): ?>
                                    <span class="status done">
                                        Admin
                                    </span>
                                <?php else: ?>
                                    <span class="status progress">
                                        Usuário
                                    </span>
                                <?php endif; ?>
                            </td>

                            <!-- Cell com ações (editar e deletar) -->
                            <td>
                                <a href="editar_usuario.php?id=<?= $usuario['id'] ?>">
                                    <i class="fa fa-edit"></i>
                                </a>
                                &nbsp;
                                <a href="../../actions/deletar_usuario.php?id=<?= $usuario['id'] ?>" onclick="return confirm('Deseja excluir este usuário?')">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>

    <script src="../assets/Js/toggleTheme.js"></script>
</body>
</html>