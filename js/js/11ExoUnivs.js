//Gestion de l'évément submit sur le formulaire
// récupération d'une référence vers le formulaire et assignation à la const "form"
const form = document.querySelector("form");

// Assignation de la propriété onsubmit sur le formulaire. ATTENTION à supprimer le comporterment par défaut qui recharge la page (e.preventDefault())
form.onsubmit = async (e) => {
  e.preventDefault();
  // Récupération de la "value" du select
  const country = document.querySelector("select").value;
  try {
    // Appel de fetch avec la bonne url (concaténation utilisant la value du select)
    const univs = await fetch(`http://universities.hipolabs.com/search?country=${country}`)
      .then(response => {
        console.log(`response status : `, response.status);
        return response.json();
      })
      .then(data => {
        console.log(`data : `, data);
        return data;
      });
    // si j'arrive ici, c'est que mon tableau univs a été assigné
    console.log(`univs : `, univs);
    
  } catch (error) {
    console.error(`Erreur attrapée : `, error);
  }



}




// Utilisation des then et des catch ou des async await

// Déclaration et assignation de la variable "univs" avec le résultat (cas favorable) du fetch

// parcours du tableau "univs" et creation des instances de Univ (classe) avec appel de la méthode "render" qui gère le dom (création de balises section h2 a) en utilisant la class bootstrap col-3