const perfilContainer = document.getElementById("perfil-container");
const perfilMenu = document.getElementById("perfil-menu");

perfilContainer.addEventListener("click", function (e) {
    e.stopPropagation();
    perfilMenu.classList.toggle("active");
});

document.addEventListener("click", function () {
    perfilMenu.classList.remove("active");
});