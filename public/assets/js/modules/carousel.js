
const projectsBox = document.getElementById('projects-box');
const button_d = document.getElementById('button_right');
const button_g = document.getElementById('button_left');
let cards = document.getElementsByClassName('card');
let p = 0;

/* Apparition des boutons suivants et precedents */
document.buttonsDisplay = () => {
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
    document.buttonsDisplay();
}

/* Dimension des cards du carousel */
window.addEventListener('resize', document.windowResize = () => {
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
                document.buttonsDisplay();
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
document.windowResize();
button_d.onclick = () => {
    p--;
    let x = p * 100 / cards.length;
    projectsBox.style.transform = "translate3d(" + x + "%, 0, 0)";
    projectsBox.style.transition = "all 0.5s";
    document.buttonsDisplay();
}
button_g.onclick = () => {
    p++;
    let x = p * 100 / cards.length;
    projectsBox.style.transform = "translate3d(" + x + "%, 0, 0)";
    projectsBox.style.transition = "all 0.5s";
    document.buttonsDisplay();
}