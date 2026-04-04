<?php flash('error'); ?>
<?php flash('success'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= asset('styles/styles.css') ?>">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>

<div class="container">

    <span>
        <h1>Register</h1>
        <i class="fa-solid fa-sun theme-toggle"></i>     
    </span>

    <form action="<?= BASE_URL ?>register" method="POST">
        <div class="campo">
            <label for="user">Usuário</label>
            <input type="text" name="user" id="user" placeholder="user">
        </div>

        <div class="campo">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="email">
        </div>

        <div class="campo password">
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" placeholder="Password">
            <i class="fa-solid fa-eye-slash toggle-password"></i>
        </div>

        <div class="campo password">
            <label for="password_confirm">Confirmar senha</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password">
            <i class="fa-solid fa-eye-slash toggle-password"></i>
        </div>

        <button type="submit">Cadastrar</button>
    </form>

    <p class="option">or sign up using</p>

    <div class="social_midias">
        <a href="#"><i class="fa-brands fa-google"></i></a>
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
    </div>

    <p class="auth-link">
        Já tem uma conta?
        <a href="<?= BASE_URL ?>login">Entrar</a>
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
