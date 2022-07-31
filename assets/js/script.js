// Changement d'icon ouverture/fermeture de la navbar

var bouton = document.querySelector("#icon-menu");
var icon = document.querySelector("#icon-menu > i");
bouton.addEventListener("click", () => {
  if (icon.className === 'bi bi-list') {
    icon.classList.remove('bi-list');
    icon.classList.add('bi-x');
  } else {
    icon.classList.remove('bi-x');
    icon.classList.add('bi-list');
  }
});

// Switch des textes pour les projets

var text1 = document.getElementById("text1");
var text2 = document.getElementById("text2");
var text3 = document.getElementById("text3");
var text = document.getElementById("projects-text");

text1.addEventListener("mouseover", function () {
  text.innerHTML = "<p>Consectetur fuga? Perspiciatis sed iusto inventore aliquid sapiente ducimus blanditiis. Quaerat enim ad itaque voluptates eveniet animi unde optio corrupti accusamus. Rem atque maiores error?</p>"
});
text2.addEventListener("mouseover", function () {
  text.innerHTML = "<p>20351514 6513212131 32120.206164684564 534654131 63435135 321.21.0216165465 1351654</p>"
});
text3.addEventListener("mouseover", function () {
  text.innerHTML = "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit rem voluptates illo qui, dicta esse doloremque perspiciatis eius aut veniam libero repudiandae a reiciendis explicabo, consectetur fuga? Perspiciatis sed iusto inventore aliquid sapiente ducimus blanditiis. Quaerat enim ad itaque voluptates eveniet animi unde optio corrupti accusamus. Rem atque maiores error?</p>";
});



