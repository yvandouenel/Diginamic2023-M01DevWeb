import Univ from "./classes/Univ.js";

let univs = [];

const form_filter = document.querySelector("#form-filter");
// Par défaut, on cache le formulaire de filtre
form_filter.hidden = true;
// Gestion du submit du formulaire de filtre
form_filter.onsubmit = (e) => {
  e.preventDefault();

  // Récupération de l'input filter
  const filter =  document.querySelector("#form-filter > input").value;
  console.log(`value du filter : `, filter);

  // S'assurer que le filter n'est pas vide
  if(filter) {
    // Suppression de l'affichage des résultats
    document.getElementById("universities").innerHTML = "";
    const univs_filtered = univs.filter(univ => univ.name.includes(filter));
    console.log(`univs_filtered : `, univs_filtered);
    univs_filtered.forEach(univ => {
      console.log(`univ : `, univ);
      // Création des instances de Univ
      new Univ(univ.name, univ.web_pages[0]);
    });

  }

  

  // Filtre de univ

  // Instanciation des Univ depuis le tableau filtré

}

//Gestion de l'évément submit sur le formulaire
// récupération d'une référence vers le formulaire et assignation à la const "form"
const form_country = document.querySelector("#form-country");



// Assignation de la propriété onsubmit sur le formulaire. ATTENTION à supprimer le comporterment par défaut qui recharge la page (e.preventDefault())
form_country.onsubmit = async (e) => {
  
  e.preventDefault();
  // Récupération de la "value" du select
  const country = document.querySelector("select").value;
  try {
    // Appel de fetch avec la bonne url (concaténation utilisant la value du select)
    univs = await fetch(`http://universities.hipolabs.com/search?country=${country}`)
      .then(response => {
        console.log(`response status : `, response.status);
        return response.json();
      })
      .then(data => {
        //console.log(`data : `, data);
        return data;
        
      });
    // si j'arrive ici, c'est que mon tableau univs a été assigné
    form_filter.hidden = false;
    univs.forEach(univ => {
      console.log(`univ : `, univ);
      // Création des instances de Univ
      new Univ(univ.name, univ.web_pages[0]);
    });

  } catch (error) {
    console.error(`Erreur attrapée : `, error);
  }

}




// Utilisation des then et des catch ou des async await

// Déclaration et assignation de la variable "univs" avec le résultat (cas favorable) du fetch

// parcours du tableau "univs" et création des instances de Univ (classe) avec appel de la méthode "render" qui gère la création des élément du dom (balises:  section h2 a) en utilisant la class bootstrap col-3