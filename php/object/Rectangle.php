<?php
class Rectangle
{
  //attributs ou propriété
  private $longueur;
  private $largeur;

  // Constructeur
  public function __construct($longeur, $largeur)
  {
    $this->longueur = $longeur;
    $this->largeur = $largeur;
  }

  public function getLongeur()
  {
    return $this->longueur;
  }
  public function setLongeur($longueur)
  {
    $this->longueur = $longueur;
  }
  public function getLargeur()
  {
    return $this->largeur;
  }
  public function setLargeur($largeur)
  {
    $this->largeur = $largeur;
  }
  public function getPerimetre()
  {
    return 2 * ($this->longueur + $this->largeur);
  }
  public function getAire()
  {
    return $this->longueur * $this->largeur;
  }
  public function isCarre()
  {
    return  $this->longueur == $this->largeur;
  }
  public function __toString()
  {
    return PHP_EOL . "Rectangle de dimension " . $this->longueur . " x " . $this->largeur;
  }
}
$rectangle = new Rectangle(30, 30);
echo PHP_EOL . "Périmètre : " . $rectangle->getPerimetre();
echo PHP_EOL . "Aire : " . $rectangle->getAire();
if ($rectangle->isCarre()) echo PHP_EOL . "Ce rectangle est carré";
else echo PHP_EOL . "Ce rectangle n'est pas carré";
echo PHP_EOL . $rectangle->__toString();
