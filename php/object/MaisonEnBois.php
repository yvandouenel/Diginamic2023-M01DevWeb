<?php

declare(strict_types=1);
require_once(dirname(__FILE__) . "/Maison.php");
require_once(dirname(__FILE__) . "/BatimentEnBois.php");
class MaisonEnBois extends Maison implements BatimentEnBois
{
  public function vernir(): void
  {
    echo PHP_EOL . "La maison est vernie !!!";
  }
}

$m1 = new MaisonEnBois("13 rue la liberté 34000 Montpellier", 6);
$m1->vernir();
