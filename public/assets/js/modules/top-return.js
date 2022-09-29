const return_to_top = document.getElementById('return-to-top');

/* Bouton retour en haut */
window.addEventListener("scroll", () => {
    if (window.scrollY < 20) {
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
