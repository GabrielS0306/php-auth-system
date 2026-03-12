<?php

    require_once __DIR__ . '/../config/conexao.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        session_start();

        if (!isset($_SESSION['user_id'])) {
            header("Location: ../public/login.php");
            exit;
        }

        $nova_senha = $_POST['nova_senha'] ?? '';
        $confirmar_nova_senha = $_POST['confirmar_nova_senha'] ?? '';

        if (empty($nova_senha) || empty($confirmar_nova_senha)) {
            header("Location: ../public/user/configuracoes.php?error=1");
            exit;
        }

        if ($nova_senha !== $confirmar_nova_senha) {
            header("Location: ../public/user/configuracoes.php?error=2");
            exit;
        }

        try {
            $senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);

            $stmt = $conexao->prepare("UPDATE usuarios SET senha = :senha WHERE id = :id");
            $stmt->bindParam(':senha', $senha_hash);
            $stmt->bindParam(':id', $_SESSION['user_id']);

            $stmt->execute();

            header("Location: ../public/user/configuracoes.php?success=1");
            exit;

        } catch (PDOException $e) {
            echo "Erro ao atualizar senha: " . $e->getMessage();
        }
    } else {
        header("Location: ../public/user/configuracoes.php");
        exit;
    }

?>