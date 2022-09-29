const cross = document.querySelectorAll(".close")
const popups = document.querySelectorAll(".popup-projects")

/* Ouverture popups projets */
document.clickProjects = (n) => {
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