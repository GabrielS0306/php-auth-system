<?php

    namespace App\Controllers;

    use PDO;
    use PDOException;

    class AuthController {
        public function login() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                require __DIR__ . '/../../config/conexao.php';

                if (!$conexao instanceof PDO) {
                    setFlash('error', 'Nao foi possivel conectar ao banco de dados.');
                    header("Location: " . BASE_URL . "login");
                    exit;
                }

                $email = trim($_POST['email'] ?? '');
                $senha = $_POST['password'] ?? '';

                if (empty($email) || empty($senha)) {
                    setFlash('error', 'Todos os campos são obrigatórios.');
                    header("Location: " . BASE_URL . "login");
                    exit;
                }

                $stmt = $conexao->prepare("
                    SELECT id, nome, email, senha, role
                    FROM usuarios 
                    WHERE email = :email
                ");

                $stmt->execute([':email' => $email]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($user && password_verify($senha, $user['senha'])) {

                    session_regenerate_id(true);

                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['usuario'] = $user['nome'];
                    $_SESSION['email'] = $user['email']; 
                    $_SESSION['role'] = $user['role'];

                    if ($user['role'] === 'admin') {
                        header("Location: " . BASE_URL . "admin");
                    } else {
                        header("Location: " . BASE_URL . "dashboard");
                    }
                    exit;
                }

                setFlash('error', 'Email ou senha invalidos.');
                header("Location: " . BASE_URL . "login");
                exit;

            } else {
                require __DIR__ . '/../../Views/auth/login.php';
            }
        }

        public function register() {

            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                header("Location: " . BASE_URL . "register");
                exit;
            }

            require __DIR__ . '/../../config/conexao.php';

            if (!$conexao instanceof PDO) {
                setFlash('error', 'Nao foi possivel conectar ao banco de dados.');
                header("Location: " . BASE_URL . "register");
                exit;
            }

            // Captura dados
            $user = trim($_POST['user'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';
            $confirm_password = $_POST['confirm_password'] ?? '';

            // Validação
            if (empty($user) || empty($email) || empty($password) || empty($confirm_password)) {
                setFlash('error', 'Todos os campos são obrigatórios.');
                header("Location: " . BASE_URL . "register");
                exit;
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                setFlash('error', 'Email inválido.');
                header("Location: " . BASE_URL . "register");
                exit;
            }

            if ($password !== $confirm_password) {
                setFlash('error', 'As senhas não coincidem');
                header("Location: " . BASE_URL . "register");
                exit;
            }

            // Criptografa senha
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Verifica email
            $stmt = $conexao->prepare("SELECT id FROM usuarios WHERE email = :email");
            $stmt->execute([':email' => $email]);

            if ($stmt->fetch()) {
                setFlash('error', 'Email já cadastrado.');
                header("Location: " . BASE_URL . "register");
                exit;
            }

            // Insere usuário
            $stmt = $conexao->prepare("
                INSERT INTO usuarios (nome, email, senha, role) 
                VALUES (:nome, :email, :senha, 'user')
            ");

            $stmt->execute([
                ':nome' => $user,
                ':email' => $email,
                ':senha' => $hashed_password
            ]);

            setFlash('success', 'Cadastro realizado com sucesso!');
            header("Location: " . BASE_URL . "login");
            exit;
        }

        public function updatePassword() {
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                header("Location: " . BASE_URL . "configuracoes");
                exit;
            }

            require __DIR__ . '/../../config/conexao.php';

            if (!$conexao instanceof PDO) {
                setFlash('error', 'Nao foi possivel conectar ao banco de dados.');
                header("Location: " . BASE_URL . "configuracoes");
                exit;
            }

            if (!isset($_SESSION['user_id'])) {
                header("Location: " . BASE_URL . "login");
                exit;
            }

            $nova_senha = $_POST['nova_senha'] ?? '';
            $confirmar_nova_senha = $_POST['confirmar_nova_senha'] ?? '';

            if (empty($nova_senha) || empty($confirmar_nova_senha)) {
                setFlash('error', 'Preencha todos os campos.');
                header("Location: " . BASE_URL . "configuracoes");
                exit;
            }

            if ($nova_senha !== $confirmar_nova_senha) {
                setFlash('error', 'As senhas não coincidem.');
                header("Location: " . BASE_URL . "configuracoes");
                exit;
            }

            try {
                $senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);

                $stmt = $conexao->prepare("UPDATE usuarios SET senha = :senha WHERE id = :id");
                $stmt->execute([
                    ':senha' => $senha_hash,
                    ':id' => $_SESSION['user_id']
                ]);

                setFlash('success', 'Senha atualizada com sucesso!');
                header("Location: " . BASE_URL . "configuracoes");
                exit;
            } catch (PDOException $e) {
                setFlash('error', 'Erro ao atualizar senha.');
                header("Location: " . BASE_URL . "configuracoes");
                exit;
            }
        }

        public function logout() {
            $_SESSION = [];

            session_destroy();

            header("Location: " . BASE_URL . "login");
            exit;
        }
    }

?>
