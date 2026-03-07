<?php

    // Inicia a sessão para armazenar mensagens de erro/sucesso
    session_start();
    // Inclui o arquivo de conexão com o banco de dados
    require_once '../config/conexao.php';

    // Verifica se a requisição é do tipo POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: ../public/register.php");
        exit;
    }

    // Captura e limpa os dados do formulário
    $user = trim($_POST['user'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Validações
    // Verifica se todos os campos foram preenchidos
    if (empty($user) || empty($email) || empty($password) || empty($confirm_password)) {
        $_SESSION['error'] = "Todos os campos são obrigatórios.";
        header("Location: ../public/register.php");
        exit;
    }

    // Valida o formato do email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Email ou senha inválido.";
        header("Location: ../public/register.php");
        exit;
    }

    // Verifica se as senhas são iguais
    if ($password !== $confirm_password) {
        $_SESSION['error'] = "As senhas não coincidem.";
        header("Location: ../public/register.php");
        exit;
    }

    // Criptografa a senha usando BCRYPT
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Verifica se o email já está cadastrado no banco de dados
    $stmt = $conexao->prepare("SELECT id FROM usuarios WHERE email = :email");
    $stmt->execute([':email' => $email]);

    if ($stmt->fetch()) {
        $_SESSION['error'] = "Email já cadastrado.";
        header("Location: ../public/register.php");
        exit;
    }

    // Insere o novo usuário no banco de dados
    $stmt = $conexao->prepare("
        INSERT INTO usuarios (nome, email, senha, role) 
        VALUES (:nome, :email, :senha, 'user')
    ");

    $stmt->execute([
        ':nome' => $user,
        ':email' => $email,
        ':senha' => $hashed_password
    ]);

    // Define mensagem de sucesso e redireciona para login
    $_SESSION['success'] = "Cadastro realizado com sucesso!";
    header("Location: ../public/login.php");
    exit;

?>