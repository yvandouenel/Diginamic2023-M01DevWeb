let h1 = document.getElementById("h1");
function handleClick(e, name) {
  console.log(`element ${name} cliqué`);
  h1.style = "color:red;";
}

h1.onclick = (e) => {
  handleClick(e, "toto");
}

// au clic sur le bouton "to-red", tout le texte devient rouge
const button_to_red = document.getElementById("to-red");
button_to_red.onclick = (event) => {
  if (document.body.style.color == "red") {
    event.target.innerText = "En rouge";
    document.body.style.color = "black";
  }
  else {
    document.body.style.color = "red";
    event.target.innerText = "En noir";
  }
}

const a = document.querySelector("a");
a.onclick = (e) => {
  e.preventDefault();
}
