<?php
declare(strict_types=1);
require_once(dirname(__FILE__) . "/Batiment.php");
class Maison extends Batiment
{
  // attribut ou propriété
  private int $nombrePieces;
  public function __construct(string $adresse, int $nombrePieces)
  {
    parent::__construct($adresse);
    $this->nombrePieces = $nombrePieces;
  }
  public function getNombrePieces():int
  {
    return $this->nombrePieces;
  }
  // Polymorphisme : la méthode affiche ne fait pas la même chose selon la classe.
  // Ici, on affiche le nombre de pièces puis on fait appel à la fonction affiche du parent (Batiment)
  public function affiche():void {
    echo PHP_EOL."Maison avec " . $this->getNombrePieces() ." pièces  ".PHP_EOL;
    parent::affiche();
  }
}

$m1 = new Maison("13 rue la liberté 34000 Montpellier", 6);
$m1->affiche();
