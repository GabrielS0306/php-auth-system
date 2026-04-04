<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login page for users to access their accounts.">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= asset('styles/styles.css') ?>">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>

<div class="container">
    <?php flash('error'); ?>
    <?php flash('success'); ?>

    <span>
        <h1>Login</h1>
        <i class="fa-solid fa-sun theme-toggle"></i>     
    </span>

    <form action="<?= BASE_URL ?>login" method="POST">
        <div class="campo">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="email">
        </div>

        <div class="campo password">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="password">
            <i class="fa-solid fa-eye-slash toggle-password"></i>
        </div>

        <div id="forgot_password">
            <a href="#">forgot password?</a>
        </div>

        <button type="submit">Entrar</button>
    </form>

    <p class="option">or sign in using</p>

    <div class="social_midias">
        <a href="#"><i class="fa-brands fa-google"></i></a>
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
    </div>

    <p class="auth-link">
        Não tem uma conta?
        <a href="<?= BASE_URL ?>register">Cadastre-se</a>
    </p>
</div>

<!-- JS -->
<script src="<?= asset('js/script.js') ?>"></script>
<script src="<?= asset('js/validar.js') ?>"></script>

<script>
    setTimeout(() => {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500);
        });
    }, 3000);
</script>

</body>
</html>
