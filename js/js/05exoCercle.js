/**
 * fonction constructeur  de cercles
 * @param {Number} rayon
 * @param {String} nom
 * @returns Cercle
 */
/* function Cercle(rayon, nom) {
  this.rayon = rayon;
  this.nom = nom;
}
Cercle.prototype.pi = Math.PI;
Cercle.prototype.aire = function () {
  console.log(
    ` L'aire de ${this.nom} est de : ${Math.round(
      this.pi * Math.pow(this.rayon, 2)
    )} cm².`
  );
}; */

class Cercle {
  // Propriété de classe
  static pi = Math.PI;
  constructor(rayon, nom) {
    this.rayon = rayon;
    this.nom = nom;
  }

  // Ajoute au prototype de la fonction constructeur la propriété aire
  aire() {
    console.log(
      ` L'aire de ${this.nom} est de : ${Math.round(
        Cercle.pi * Math.pow(this.rayon, 2)
      )} cm².`
    );
  }
  presentation() {
    console.log(
      ` ${this.nom} est un cercle d'aire: ${Math.round(
        Cercle.pi * Math.pow(this.rayon, 2)
      )} cm².`
    );
  }
  
}

class CercleColore extends Cercle {
  constructor(rayon, nom, couleur) {
    super(rayon, nom);
    this.couleur = couleur;
  }
  // Polymorphysme
  presentation() {
    super.presentation();
    console.log(` ... et je suis de couleur ${this.couleur} `);
  }
}

// instanciation des cercles
let petitCercle = new Cercle(12, "Petit cercle");
console.log(`petitCercle : `, petitCercle);
const grandCercle = new Cercle(120, "Grand cercle");
petitCercle.presentation();

// Remonter la chaîne des prototypes
/* while(petitCercle) {
  console.log(`constructeur: `, petitCercle.constructor.name);
  petitCercle = Object.getPrototypeOf(petitCercle);
} */

const ccr = new CercleColore(5, "Cercle rouge", "rouge");
ccr.presentation();