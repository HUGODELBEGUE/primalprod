// Elevation du header

const elevation = document.querySelector("header");
const title = document.querySelector(".anchor");

window.addEventListener("scroll", function () {
  if (this.window.scrollY > title.offsetTop) {
    elevation.classList.add("elevation");
  } else {
    elevation.classList.remove("elevation");
  }
})


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

// Ouverture popups projets

function clickProjects(n) {
  var overlay = document.getElementById("overlay");
  if (n === 1) {
    console.log("hello1")
    document.querySelector("#text1").style.display = "flex";
    overlay.style.display = "block";
  } else if (n === 2) {
    console.log("hello2")
    document.querySelector("#text2").style.display = "flex";
    overlay.style.display = "block";
  } else if (n === 3) {
    console.log("hello3")
    document.querySelector("#text3").style.display = "flex";
    overlay.style.display = "block";
  } else if (n === 4) {
    console.log("hello4")
    document.querySelector("#text4").style.display = "flex";
    overlay.style.display = "block";
  } else if (n === 5) {
    console.log("hello5")
    document.querySelector("#text5").style.display = "flex";
    overlay.style.display = "block";
  } else {
    window.open('./')
  }
}

// Fermeture popups projects

var cross = document.querySelectorAll(".close")
var popups = document.querySelectorAll(".popup-projects")
for (var i = 0; i < cross.length; i++) {
  var cros = cross[i];
  cros.addEventListener("click", function () {
    for (var i = 0; i < popups.length; i++) {
      var popup = popups[i];
      popup.style.display = "none";
      overlay.style.display = "none";
    }
  });
}




// window.addEventListener("scroll", function () {
//   for (var i = 0; i < popups.length; i++) {
//     var card = popups[i];
//     if (window.scrollY < 200) {
//       console.log("hello")
//       card.style.display = "none";
//     } 

//   }
// })



