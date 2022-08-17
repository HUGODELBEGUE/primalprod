// Elevation du header

const elevation = document.querySelector("header");
const title = document.querySelector(".anchor");
window.addEventListener("scroll", () => {
    if (this.window.scrollY > title.offsetTop) {
        elevation.classList.add("elevation");
    } else {
        elevation.classList.remove("elevation");
    }
})

// Changement d'icon && fermeture automatique de la navbar

const bouton = document.querySelector("#icon-menu");
const icon = document.querySelector("#icon-menu > i");
const menu = document.querySelector(".menu-items");
bouton.addEventListener("click", () => {
    if (icon.className === 'bi bi-list') {
        icon.classList.remove('bi-list');
        icon.classList.add('bi-x');
        menu.style.display = "flex";
    } else {
        icon.classList.remove('bi-x');
        icon.classList.add('bi-list');
        menu.style.display = "none";
    }
});
window.addEventListener("scroll", () => {
    if (this.window.scrollY > 200) {
        menu.style.display = "none";
        icon.classList.remove('bi-x');
        icon.classList.add('bi-list');
    }
})

// Ouverture popups projets

clickProjects = (n) => {
    switch (n){
        case 1:
            document.querySelector("#text1").style.display = "flex";
            overlay.style.display = "block";
            break;
        case 2:
            document.querySelector("#text2").style.display = "flex";
            overlay.style.display = "block";
            break;
        case 3:
            document.querySelector("#text3").style.display = "flex";
            overlay.style.display = "block";
            break;
        case 4:
            document.querySelector("#text4").style.display = "flex";
            overlay.style.display = "block";
            break;
        case 5:
            document.querySelector("#text5").style.display = "flex";
            overlay.style.display = "block";
            break;
        default:
            window.open('./');
    }
}

// Fermeture popups projects

const cross = document.querySelectorAll(".close")
const popups = document.querySelectorAll(".popup-projects")
for (let i = 0; i < cross.length; i++) {
    let c = cross[i];
    c.addEventListener("click", function () {
        for (let i = 0; i < popups.length; i++) {
            let popup = popups[i];
            popup.style.display = "none";
            overlay.style.display = "none";
        }
    });
}

// Carousel

const projectsBox = document.getElementById('projects-box');
const button_d = document.getElementById('button_right');
const button_g = document.getElementById('button_left');
let widthElement = document.getElementById('cardWidth').offsetWidth;
let p = 0;
// resize = () => {
//     let widthWindow = window.innerWidth;
//     if (widthWindow < 610) {
//         // location.reload();
//         projectsBox.style.backgroundColor = "blue";
//     }
//     if (widthWindow > 610){
//         projectsBox.style.backgroundColor = "initial";
//     }
// }
// window.onresize = resize;
document.body.onload = () => {
    buttonsDisplay();
}
button_d.onclick = () => {
    if (p > -5) {
        p--;
        console.log(widthElement);
        projectsBox.style.transform = "translateX(" + p * (widthElement + 20) + "px)";
        projectsBox.style.transition = "all 0.5s";
        buttonsDisplay();
    }
}
button_g.onclick = () => {
    if (p < 0) {
        p++;
        projectsBox.style.transform = "translateX(" + p * (widthElement + 20) + "px)";
        projectsBox.style.transition = "all 0.5s";
        buttonsDisplay();
    }
}
buttonsDisplay = () => {
    if (p === -5) {
        button_d.style.visibility = "hidden";
    } else {
        button_d.style.visibility = "visible";
    }
    if (p === 0) {
        button_g.style.visibility = "hidden";
    } else {
        button_g.style.visibility = "visible";
    }
}



