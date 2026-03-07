document.addEventListener("DOMContentLoaded", () => {

    const toggleButton = document.getElementById("toggleTheme");
    const icon = toggleButton.querySelector("i");

    const savedTheme = localStorage.getItem("theme");

    if (savedTheme === "dark") {
        document.body.classList.add("dark");
        icon.classList.replace("fa-moon", "fa-sun");
    }

    toggleButton.addEventListener("click", () => {
        document.body.classList.toggle("dark");

        if (document.body.classList.contains("dark")) {
            icon.classList.replace("fa-moon", "fa-sun");
            localStorage.setItem("theme", "dark");
        } else {
            icon.classList.replace("fa-sun", "fa-moon");
            localStorage.setItem("theme", "light");
        }
    });

});