<?php

    // Inicia a sessão e inclui a conexão com o banco de dados
    session_start();
    require_once '../config/conexao.php';

    // Verifica se o método de requisição é POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: ../register.php");
        exit;
    }

    // Dados inseridos pelo usuário
    $user = trim($_POST['user'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Validações básicas
    if (empty($user) || empty($email) || empty($password)) {
        header("Location: ../register.php");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../register.php");
        exit;
    }

    if ($password !== $confirm_password) {
        header("Location: ../register.php");
        exit;
    }

    // Hash da senha
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Verifica se email já existe
    $sql = "SELECT id FROM usuarios WHERE email = :email";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        header("Location: ../register.php");
        exit;
    }

    $sql = "INSERT INTO usuarios (nome, email, senha) 
            VALUES (:nome, :email, :senha)";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':nome', $user);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $hashed_password);
    $stmt->execute();

    header("Location: ../login.php");
    exit;

?>