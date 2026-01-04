const toggleTheme = () => {
    const body = document.body;
    const icon = document.getElementById('theme-icon');


    body.classList.toggle('dark-theme');

    if (body.classList.contains('dark-theme')) {
        icon.classList.replace('fa-moon', 'fa-sun');
        localStorage.setItem('theme', 'dark');
    } else {
        icon.classList.replace('fa-sun', 'fa-moon');
        localStorage.setItem('theme', 'light');
    }
}


window.onload = () => {
    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add('dark-theme');
        document.getElementById('theme-icon').classList.replace('fa-moon', 'fa-sun');
    }
};