fetch("https://www.cooooopernet.fr/session/token")
  .then(response => {
    console.log(`statut de la réponse`, response.status);
    if(response.status != 200) return new Error("Pb de statut de la réponse");
    return response.text();
  })
  .then(token => {
    console.log(`token : `, token);
  })
  .catch(error => {
    console.error(`Erreur attrapée`, error);
  });