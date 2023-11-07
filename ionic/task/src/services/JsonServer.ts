export default class JsonServer{
  static url = "http://localhost:3000/tasks";
  // création du service qui permet d'exécuter des requêtes sur le serveur rest (fetch)
  static async loadData() {
    return fetch(JsonServer.url)
    .then(response => {
      return response.json();
    })
    .then(data => {
      return data;
    })
    .catch(error => {
      console.error(`Erreur dans loadData`, error);
    })
  }
}