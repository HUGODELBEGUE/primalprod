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
