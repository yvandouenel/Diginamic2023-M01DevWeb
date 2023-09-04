export default class Data {
  private static instance: Data;
  base_url: string;

  private constructor() {
    this.base_url = "http://localhost:3001/";
  }

  public static getInstance(): Data {
    if(!Data.instance) {
      Data.instance = new Data();
    }
    return Data.instance;
  }
  async loadArticles () {
    return fetch(this.base_url + "articles")
    .then(response => {
      return response.json();
    })
    .then(data => {
      return data;
    })
    .catch(error=> {
      console.error("Erreur attrapée dans loadArticles" + error)
    })
  }
  async addArticle(name: string) {
    return fetch(this.base_url + "articles",
      {
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        method: "POST",
        body: JSON.stringify({ "name": name, "validated": false })
      })
      .then(function (res) { console.log(res) })
      .catch(function (error) { console.log(`Erreur attrapée dans addArticle`, + error) })
  }
  async validateArticle(article_id: string, validated: string) {
  }
}