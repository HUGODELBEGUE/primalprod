
const form = document.forms['contact_mail'];
const aLegende = document.getElementsByClassName('legende');
const divLabel = document.getElementsByClassName('logo-label')

/* Popup validation formulaire et couleur des inputs */
form.addEventListener('submit', () => {
    const formContainer = document.getElementById('form-contact');
    const pop = document.createElement('div');
    pop.classList.add('pop-form');
    pop.innerHTML = "<i class=\"bi bi-check-circle-fill\"></i>";
    formContainer.appendChild(pop);
})

/* Couleur de saisie des inputs */
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