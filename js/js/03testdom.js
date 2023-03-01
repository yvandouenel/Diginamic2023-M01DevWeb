// variable qui est une référence à un élément du DOM
let h1 = document.getElementById("h1");


// ajoute h1 en tant que dernier enfant de body
document.head.appendChild(h1);

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
while (h1) {
  console.log("class de h1 : ", h1.constructor.name);
  // Remonte la chaîne des prototypes
  h1 = Object.getPrototypeOf(h1);
}
