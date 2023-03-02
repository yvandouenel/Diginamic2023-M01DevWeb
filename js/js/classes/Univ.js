export default class Univ {
  constructor(name, url) {
    this.name = name;
    this.url = url;

    this.render();
  }
  render() {
    const section_univ = this.createMarkup("section", "", document.querySelector("#universities"),{name:"class",value:"w-25 p-2 border rounded-3"});
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