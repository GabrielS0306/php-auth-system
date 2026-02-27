// Mudança do icone de senha 
document.querySelectorAll('.toggle-password').forEach(icon => {
    icon.addEventListener('click', () => {
        const input = icon.previousElementSibling;

        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.add('fa-eye');
            icon.classList.remove('fa-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.add('fa-eye-slash');
            icon.classList.remove('fa-eye');
        }
    });
});

// Dark Ligth
const body = document.querySelector('body');
const icons = document.querySelectorAll('.theme-toggle');

icons.forEach((icon) => {
    icon.addEventListener('click', () => {
        if (body.classList.contains('dark')) {
            body.classList.remove('dark');
            icon.classList.replace('fa-sun', 'fa-moon');
        } else {
            body.classList.add('dark');
            icon.classList.replace('fa-moon', 'fa-sun');
        }
    });
});
