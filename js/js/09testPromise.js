function getToken() {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      if (Math.random() > 0.1) {
        console.log(`cas favorable`);
        resolve("qsdfqsdfoçdofpFFDSs");
      } else {
        console.log(`cas défavorable`);
        reject(new Error("Problème de token"));
      }
    }, 1000);
  })
}
function getUser(token) {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      if (Math.random() > 0.1 && token) {
        console.log(`cas favorable`);
        resolve({ uid: 258, ulogin: "bobylapointe" });
      } else {
        console.log(`cas défavorable`);
        reject(new Error("Problème pour récupérer les données de l'utilisateur"));
      }
    }, 1000);
  })
}
// Dans le cas ou j'utilise une fonction qui renvoie une promesse, je peux utiliser le chaînage de la fonction "then" pour récupérer la donnée dans le cas favorable. Sinon, la fonction catch sera utilisée pour "attraper" l'erreur
/* getToken()
  .then((token) => {
    console.log(`token : `, token);
    return getUser(token);
  })
  .then((user) => {
    console.log(`user : `, user);
  })
  .catch(error => {
    console.error(error);
  }); */

async function getTokenAndUSer() {
  try {
    const token = await getToken();
    const user = await getUser(token);
    console.log(`token : `, token);
    console.log(`user : `, user);
  } catch (error) {
    console.error(error);
  }
}
getTokenAndUSer();
