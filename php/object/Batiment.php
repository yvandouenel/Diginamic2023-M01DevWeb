<?php
class Batiment {
  // attribut ou propriété
  private $adresse;
  public function __construct($adresse)
  {
    $this->adresse = $adresse;
  }
  public function getAdresse() {
    return $this->adresse;
  }
  public function affiche() {
    echo PHP_EOL."Adresse : " . $this->getAdresse();
  }
}
