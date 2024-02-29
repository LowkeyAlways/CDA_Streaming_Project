document.addEventListener("DOMContentLoaded", e => {

    /*==================== Mode Sombre ====================*/
    const themeButton = document.getElementById('theme-button');
    const darkTheme = 'dark-theme';
    const iconTheme = 'fa-sun';
    const moonIcon = 'fa-moon';

    const selectedTheme = localStorage.getItem('selected-theme');

    const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light';

    const toggleIcon = () => {
        themeButton.classList.toggle(iconTheme);
        themeButton.classList.toggle(moonIcon);
    };

    if (selectedTheme) {
        document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme);
        toggleIcon();
    }

    themeButton.addEventListener('click', () => {
        document.body.classList.toggle(darkTheme);
        toggleIcon();
        localStorage.setItem('selected-theme', getCurrentTheme());
    });
});
