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
