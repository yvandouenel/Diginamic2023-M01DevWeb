class Univ {
  constructor(name, url) {
    this.name = name;
    this.url = url;

    this.render();
  }
  render() {
    const section_univ = this.createMarkup("section", "", document.querySelector("#universities"),{name:"class",value:"w-25 border rounded-3"});
    const h2_univ = this.createMarkup("h2", this.name, section_univ);
    const a_univ = this.createMarkup("a", "Voir le site web", section_univ, {name: "href", value:this.url});
  }
  /**
   * Crée un élément du dom, lui ajoute du texte, le place comme dernier
   * enfant de parent et ajoute un attribut en utilisant le paramètre attribute
   * @param {String} markup_name 
   * @param {String} text 
   * @param {domElement} parent 
   * @param {Object} attribute  (doit comprendre les propriétés name et value)
   * @returns domElement
   */
  createMarkup(markup_name, text, parent, attribute) {
    const markup = document.createElement(markup_name);
    markup.textContent = text;
    parent.appendChild(markup);
    if (attribute && attribute.hasOwnProperty("name")) {
      markup.setAttribute(attribute.name, attribute.value);
    }
    return markup;
  }
}

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
        //console.log(`data : `, data);
        return data;
      });
    // si j'arrive ici, c'est que mon tableau univs a été assigné
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