// Validação de formulário para garantir que todos os campos sejam preenchidos antes de enviar para o backend
const form = document.querySelector("form");

form.addEventListener("submit", (e) => {
    let enviarForm = true;

    const campos = form.querySelectorAll("input");

    campos.forEach(campo => {
        if (!campo.value.trim()) {
            enviarForm = false;
            campo.style.borderColor = "red";
        } else {
            campo.style.borderColor = "#ccc";
        }
    });

    if (!enviarForm) {
        e.preventDefault();
        alert("Preencha todos os campos obrigatórios.");
    }
});
