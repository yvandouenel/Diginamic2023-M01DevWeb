// variable qui est une référence à un élément du DOM
let h1 = document.getElementById("h1");


// ajoute h1 en tant que dernier enfant de body
//document.body.appendChild(h1);

// retire h1 de l'arborescence du dom
//h1.remove();
window.console.log(`h1 : `, h1);
console.log(window);

// fermeture de la fenêtre :
//window.close();

// fenêtre d'alerte:
//window.alert("Alerte !");

// Création d'un élément du dom
const section = document.createElement("section");
//section.innerText = "Lore ipsum ...";
section.innerHTML = "<p>Lore ipsum ...</p>";
section.setAttribute("id", "my-section");
window.document.body.appendChild(section);

// création d'un élément du dom button
const button = document.createElement("button");
// Ajout d'un texte dans l'élément du dom
button.innerText = "Bouton";
// Ajout de l'élément du dom en tant que dernier enfant de l'élement du dom section
section.appendChild(button);

//console.log("class de h1 : ", h1.constructor.name);
/* while (h1) {
  console.log("class de h1 : ", h1.constructor.name);
  // Remonte la chaîne des prototypes
  h1 = Object.getPrototypeOf(h1);
} */


h1.align = "center";
h1.hidden = false;
h1.innerHTML = "<span>Ceci est un texte dans un span</span>";
h1.style = "border: 5px solid red;"
h1.title = "Titre avec infobulle au survol";

h1.className = "toto titi";
console.log(h1.classList);
/* h1.animate([
  // étapes/keyframes
  { transform: 'translateY(0px)' },
  { transform: 'translateY(-300px)' }
], {
  // temporisation
  duration: 1000,
  iterations: Infinity
}) */
console.log(h1.baseURI);
console.log(h1.firstChild);
console.log("nextElementSibling : ", h1.nextElementSibling);

h1.addEventListener("mouseover", ()=> {
  console.log(`Click sur h1`);
  const first_p = document.querySelector("p");
  first_p.style = "color:red; font-size: 1.2em;"
})