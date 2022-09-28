/* Elevation du header */

const elevation = document.querySelector("header");
const title = document.querySelector(".anchor");
window.addEventListener("scroll", () => {
    if (this.window.scrollY > title.offsetTop) {
        elevation.classList.add("elevation");
    } else {
        elevation.classList.remove("elevation");
    }
})

/* Changement d'icon && fermeture automatique de la navbar */

const bouton = document.querySelector("#icon-menu");
const icon = document.querySelector("#icon-menu > i");
const menu = document.querySelector(".menu-items");
const logo = document.querySelector("#logo_primalprod")
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
window.addEventListener("scroll", () => {
    if (this.window.scrollY > 200) {
        menu.style.display = "none";
        icon.classList.remove('bi-x');
        icon.classList.add('bi-list');
        logo.style.opacity = "1";
    }
})

/* Effet du titre */

const titleEffect = document.getElementById('effect_title');
let tw1 = new Typewriter(titleEffect, {
    wrapperClassName: 'wrapper',
    cursorClassName: 'cursor',
    delay: 75,
    loop: true,
});
tw1
    .pauseFor(750)
    .typeString('<span class="wrapper" style="color: #202124">freelance</span>')
    .pauseFor(1500)
    .deleteChars(9)
    .pauseFor(500)
    .typeString('<span class="wrapper" style="color: #4b47a1">WordPress</span>')
    .pauseFor(1500)
    .deleteChars(9)
    .pauseFor(500)
    .typeString('<span class="wrapper" style="color: #f2c744">JavaScript</span>')
    .pauseFor(1500)
    .deleteChars(10)
    .pauseFor(500)
    .typeString('<span class="wrapper" style="color: #8791be">php</span>')
    .pauseFor(1500)
    .deleteChars(3)
    .pauseFor(500)
    .typeString('<span class="wrapper" style="color: #f16524">HTML</span>')
    .pauseFor(300)
    .typeString('&nbsp;&&nbsp;' + '<span class="wrapper" style="color: #01a3e0">CSS</span>')
    .pauseFor(1500)
    .deleteChars(10)
    .pauseFor(1000)
    .start();

/* Ouverture popups projets */

clickProjects = (n) => {
    switch (n) {
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
        // case 4:
        //     document.querySelector("#text4").style.display = "flex";
        //     overlay.style.display = "block";
        //     break;
        // case 5:
        //     document.querySelector("#text5").style.display = "flex";
        //     overlay.style.display = "block";
        //     break;
        default:
            window.open('./');
    }
}

/* Fermeture popups projects */

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

/* Carousel */

const projectsBox = document.getElementById('projects-box');
const button_d = document.getElementById('button_right');
const button_g = document.getElementById('button_left');
let cards = document.getElementsByClassName('card');
let p = 0;
buttonsDisplay = () => {
    if (p === -3) {
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
document.body.onload = () => {
    buttonsDisplay();
}

// Dimension des cards du carousel
window.addEventListener('resize', windowResize = () => {
    if (window.innerWidth > 610) {
        let itemVisible = 2;
        let ratio = cards.length / itemVisible;
        projectsBox.style.width = (ratio * 100) + "%";
        for (let i = 0; i < cards.length; i++) {
            cards[i].style.width = ((100 / itemVisible) / ratio) + "%";
            cards[i].style.height = "auto";
            cards[i].style.aspectRatio = "1 / 1";
            if (window.innerWidth > 1080) {
                p = 0;
                projectsBox.style.transform = "none";
                buttonsDisplay();
            }
        }
    } else if (window.innerWidth < 610) {
        let itemVisible = 1;
        let ratio = cards.length / itemVisible;
        projectsBox.style.width = (ratio * 100) + "%";
        for (let i = 0; i < cards.length; i++) {
            cards[i].style.width = ((100 / itemVisible) / ratio) + "%";
            cards[i].style.height = "auto";
            cards[i].style.aspectRatio = "1 / 1";
        }
    }
})
windowResize();
button_d.onclick = () => {
    p--;
    let x = p * 100 / cards.length;
    console.log(p);
    projectsBox.style.transform = "translate3d(" + x + "%, 0, 0)";
    projectsBox.style.transition = "all 0.5s";
    buttonsDisplay();
}
button_g.onclick = () => {
    p++;
    let x = p * 100 / cards.length;
    console.log(p);
    projectsBox.style.transform = "translate3d(" + x + "%, 0, 0)";
    projectsBox.style.transition = "all 0.5s";
    buttonsDisplay();
}

/* Popup validation formulaire et couleur des inputs */

const form = document.forms['contact_mail'];
form.addEventListener('submit', () => {
    const formContainer = document.getElementById('form-contact');
    const pop = document.createElement('div');
    pop.classList.add('pop-form');
    pop.innerHTML = "<i class=\"bi bi-check-circle-fill\"></i>";
    formContainer.appendChild(pop);
})
form.addEventListener('input', () => {
    for (let i = 0; i < form.length; i++) {
        console.log()
        if (form[i]['name'] === 'name') {
            form['name'].style.backgroundColor = "rgba(242, 199, 68, .35)";
            form['name'].style.transition = "all .10s linear";
        }
        if (form[i]['name'] === 'email') {
            form['email'].style.backgroundColor = "rgba(242, 199, 68, .35)";
            form['email'].style.transition = "all .10s linear";
        }
        if (form[i]['name'] === 'subject') {
            form['subject'].style.backgroundColor = "rgba(242, 199, 68, .35)";
            form['subject'].style.transition = "all .10s linear";
        }
        if (form[i]['name'] === 'message') {
            form['message'].style.backgroundColor = "rgba(242, 199, 68, .35)";
            form['message'].style.transition = "all .10s linear";
        }
        if (form[i].value === '') {
            form[i].style.backgroundColor = "#fff";
        }
    }
})

/* Liens formulaire */

const aLegende = document.getElementsByClassName('legende');
const divLabel = document.getElementsByClassName('logo-label')
for (let i = 0; i < aLegende.length; i++) {
    aLegende[i].onmouseover = () => {
        for (let j = 0; j < divLabel.length; j++) {
            divLabel[i].style.color = "rgb(0, 0, 0)";
            divLabel[i].style.transition = "color .15s linear";
        }
    }
    aLegende[i].onmouseleave = () => {
        for (let j = 0; j < divLabel.length; j++) {
            divLabel[i].style.color = "rgb(0, 0, 0, .5)";
            divLabel[i].style.transition = "color .15s linear";
        }
    }
}

/* Bouton retour en haut */

const return_to_top = document.getElementById('return-to-top');
window.addEventListener("scroll", () => {
    if (this.window.scrollY < 20) {
        return_to_top.classList.add("hide");
        return_to_top.classList.remove("show");
    } else {
        return_to_top.classList.add("show");
        return_to_top.classList.remove("hide");
    }
    let timer = null;
    window.addEventListener('scroll', function() {
        if(timer !== null) {
            clearTimeout(timer);
            return_to_top.style.backgroundColor = "rgba(0, 0, 0, .7)";
        }
        timer = setTimeout(function() {
            return_to_top.style.backgroundColor = "rgba(0, 0, 0, .2)";
        }, 750);
    }, false);
})

