// Fonction constructeur d'objets User
function User(id, name){
  this.id = id;// déclare la propriété id et lui assigne la valeur passée en argument et récupérée dans le paramètre id
  this.name = name;

  this.introduceMySelf = function() {
    console.log(`Hello, my name is ${this.name}`);
  }
}

// Prototype
//User.prototype.species = "human";
User.prototype.species = "human";
/* User.prototype.introduceMySelf = function() {
  console.log(`Hello, my name is ${this.name}`);
} */

// création d'une instance de User
const bob = new User(568, "Bob");

// création d'une instance de User
const jojo = new User(87236, "Joël");

console.log(`bob : `, bob);

console.log(`Espece de bob : `, bob.species);
console.log(`Espece de jojo : `, jojo.species);

// Affiche la présentation de bob
bob.introduceMySelf();


