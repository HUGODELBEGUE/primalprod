const bouton = document.querySelector("#icon-menu");
const icon = document.querySelector("#icon-menu > i");
const menu = document.querySelector(".menu-items");
const logo = document.querySelector("#logo_primalprod");

/* Changement d'icons du menu navbar */
bouton.addEventListener("click", () => {
    if (icon.className === 'bi bi-list') {
        icon.classList.remove('bi-list');
        icon.classList.add('bi-x');
        menu.style.display = "flex";
        logo.style.opacity = ".3";
    } else {
        icon.classList.remove('bi-x');
        icon.classList.add('bi-list');
        menu.style.display = "none";
        logo.style.opacity = "1";
    }
});

/* Fermeture automatique de la navbar */
window.addEventListener("scroll", () => {
    if (window.scrollY > 200) {
        menu.style.display = "none";
        icon.classList.remove('bi-x');
        icon.classList.add('bi-list');
        logo.style.opacity = "1";
    }
})