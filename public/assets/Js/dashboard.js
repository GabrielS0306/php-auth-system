const toggleTheme = document.getElementById('toggleTheme');
const icon = toggleTheme.querySelector('i');
const body = document.body;

toggleTheme.addEventListener('click', () => {
    body.classList.toggle('dark');

    if (body.classList.contains('dark')) {
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
    } else {
        icon.classList.remove('fa-sun');
        icon.classList.add('fa-moon');
    }
});

const perfilContainer = document.getElementById("perfil-container");
const perfilMenu = document.getElementById("perfil-menu");

perfilContainer.addEventListener("click", function (e) {
    e.stopPropagation();
    perfilMenu.classList.toggle("active");
});

document.addEventListener("click", function () {
    perfilMenu.classList.remove("active");
});