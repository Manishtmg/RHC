document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    const dropdownToggle = document.querySelector('.dropdown-toggle');
    const dropdown = document.querySelector('.dropdown');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('show');
    });

    dropdownToggle.addEventListener('click', (event) => {
        event.preventDefault(); // Prevent the default link behavior
        dropdown.classList.toggle('show');
    });
});
