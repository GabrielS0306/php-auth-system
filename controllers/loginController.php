<?php

    // Inicia a sessão do usuário
    session_start();
    // Inclui o arquivo de conexão com o banco de dados
    require_once '../config/conexao.php';

    // Verifica se a requisição é do tipo POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: ../public/login.php");
        exit;
    }

    // Obtém e limpa o email e senha do formulário
    $email = trim($_POST['email'] ?? '');
    $senha = $_POST['password'] ?? '';

    // Valida se os campos foram preenchidos
    if (empty($email) || empty($senha)) {
        $_SESSION['error'] = "Todos os campos são obrigatórios.";
        header("Location: ../public/login.php");
        exit;
    }

    // Consulta o usuário no banco de dados pelo email
    $stmt = $conexao->prepare("
        SELECT id, nome, email, senha, role
        FROM usuarios 
        WHERE email = :email
    ");

    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica se o usuário existe e a senha está correta
    if ($user && password_verify($senha, $user['senha'])) {
        // Regenera o ID da sessão por segurança
        session_regenerate_id(true);

        // Armazena os dados do usuário na sessão
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['usuario'] = $user['nome'];
        $_SESSION['email'] = $user['email']; 
        $_SESSION['role'] = $user['role'];

        // Redireciona conforme o role do usuário
        if ($user['role'] === 'admin') {
            header("Location: ../public/admin/dashboard.php");
            exit;
        } else {
            header("Location: ../public/user/dashboard.php");
            exit;
        }
    }

    // Exibe erro se login falhar
    $_SESSION['error'] = "Email ou senha inválidos.";
    header("Location: ../public/login.php");
    exit;

?>