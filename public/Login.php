<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login page for users to access their accounts.">
    <title>Login</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Container principal da página de login -->
    <div class="container">
        <!-- Exibe mensagens de erro da sessão -->
        <?php if (isset($_SESSION['error'])): ?>
            <div class="error">
                <? 
                    echo $_SESSION['error']; 
                    unset($_SESSION['error']); 
                ?>
            </div>
        <?php endif; ?>
        
        <!-- Cabeçalho com título e botão de tema -->
        <span>
            <h1>Login</h1>
            <i class="fa-solid fa-sun theme-toggle"></i>     
        </span>
        
        <!-- Formulário de login -->
        <form action="../controllers/loginController.php" method="post">
            <!-- Campo de email -->
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="email">
            </div>
            
            <!-- Campo de senha com ícone de visualização -->
            <div class="campo password">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" placeholder="password">
                <i class="fa-solid fa-eye-slash toggle-password"></i>
            </div>
            
            <!-- Link para recuperação de senha -->
            <div id="forgot_password">
                <a href="#">forgot password?</a>
            </div>
            
            <!-- Botão de envio do formulário -->
            <button type="submit">Entrar</button>
        </form>
        
        <!-- Texto separador para login social -->
        <p class="option">or sign in using</p>
        
        <!-- Ícones de redes sociais para login -->
        <div class="social_midias">
            <a href="#">
                <i class="fa-brands fa-google"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
        </div>
        
        <!-- Link para página de cadastro -->
        <p class="auth-link">
            Não tem uma conta?
            <a href="../controllers/registerController.php">Cadastre-se</a>
        </p>
    </div>

    <!-- Scripts JavaScript -->
    <script src="./assets/Js/script.js"></script>
    <script src="./assets/Js/validar.js"></script>
</body>
</html>