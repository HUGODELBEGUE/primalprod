const elevation = document.querySelector("header");
const title = document.querySelector(".anchor");

/* Elevation du header */
window.addEventListener("scroll", () => {
    if (window.scrollY > title.offsetTop) {
        elevation.classList.add("elevation");
    } else {
        elevation.classList.remove("elevation");
    }
})