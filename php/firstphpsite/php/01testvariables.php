<?php
// typage dynamique
// Déclaration avec $ et assignation avec =
// typage dynamique
$i = (int) 12;
$i = (boolean) "qsdf";
/* echo $i;
echo PHP_EOL; */
$num = (int) 5.4;
// opérateur + entraîne un transtypage éventuel en num ou float
/* echo $num + "10";
echo PHP_EOL; */
// opérateur + entraîne un transtypage éventuel en string
/* echo $num . 10; */
$jean = "Jean";
// copie par valeur
//$bob = $jean; 
// passage par référence
$bob =& $jean;
echo '$jean : ' . $jean;
$bob = "Raymond";
echo PHP_EOL;
echo '$bob : ' . $bob;
echo PHP_EOL;
echo '$jean : ' . $jean;
// portée des variables
$a = 12; // portée globale


var_dump($GLOBALS["_GET"]);

// constante (pas de $)
define('USER', "yvan $a");
echo PHP_EOL;
echo USER;
