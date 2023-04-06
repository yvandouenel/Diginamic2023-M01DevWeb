<?php
abstract class Batiment
{
  // attribut ou propriété
  private ?string $adresse;
  public function __construct(?string $adresse = null)
  {
    $this->adresse = $adresse;
  }
  public function getAdresse(): ?string
  {
    return $this->adresse;
  }
  public function affiche(): void
  {
    if ($this->getAdresse() == null) echo "Pas d'adresse";
    else echo PHP_EOL . "Adresse : " . $this->getAdresse();
  }
}
