<?php
class Employe
{
  private $matricule;
  private $nom;
  private $prenom;
  private $date_naissance;
  private $date_embauche;
  private $salaire;

  // constructeur
  function __construct($matricule, $nom, $prenom, $date_naissance, $date_embauche, $salaire)
  {
    $this->matricule = $matricule;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->date_naissance = $date_naissance;
    $this->date_embauche = $date_embauche;
    $this->salaire = $salaire;
  }
  public function setMatricule($matricule)
  { //paramètre
    $this->matricule = $matricule;
  }
  public function setNom($nom)
  { //paramètre
    $this->nom = $nom;
  }
  public function setPrenom($prenom)
  { //paramètre
    $this->prenom = $prenom;
  }
  public function setDateNaissance($date_naissance)
  { //paramètre
    $this->date_naissance = $date_naissance;
  }
  public function setDateEmbauche($date_embauche)
  { //paramètre
    $this->date_embauche = $date_embauche;
  }
  public function setSalaire($salaire)
  { //paramètre
    $this->salaire = $salaire;
  }
  public function getMatricule()
  { //paramètre
    return $this->matricule;
  }
  public function getNom()
  { //paramètre
    return $this->nom;
  }
  public function getPrenom()
  { //paramètre
    return $this->prenom;
  }
  public function getDateNaissance()
  { //paramètre
    return $this->date_naissance;
  }
  public function getDateEmbauche()
  { //paramètre
    return $this->date_embauche;
  }
  public function getSalaire()
  { //paramètre
    return $this->salaire;
  }
  public function getAge()
  {
    // traitement pour récupére l'age en fonction de la date de naissance
    $now = new DateTime('now');
    $dateBirth = new DateTime($this->getDateNaissance());
    $age = $now->diff($dateBirth);
    return $age->y;
  }
  public function getAnciennete()
  {
    // traitement pour récupére l'age en fonction de la date de naissance
    $now = new DateTime('now');
    $dateOldness = new DateTime($this->getDateEmbauche());
    $anciennete = $now->diff($dateOldness);
    return $anciennete->y;
  }
  public function augmenterSalaire()
  {
    if ($this->getAnciennete() < 5) return $this->setSalaire($this->getSalaire() * 1.02);
    if ($this->getAnciennete() < 10) return $this->setSalaire($this->getSalaire() * 1.05);
    if ($this->getAnciennete() >= 10) return $this->setSalaire($this->getSalaire() * 1.1);
  }
}
// instanciation de la classe Employe
$bob = new Employe("123", "Dylan", "Bob", "1955/06/25", "1998/02/03", 500000);
var_dump($bob);
// test getAge
echo "age : " . $bob->getAge() . PHP_EOL;
echo "anciennete : " . $bob->getAnciennete() . PHP_EOL;
$bob->augmenterSalaire();
echo PHP_EOL . $bob->getSalaire() . PHP_EOL;
