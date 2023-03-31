<?php
$a = 5;

if ($a > 3) {
  echo $a . " est supérieur à trois.";
}
echo PHP_EOL;
// Pour se convaincre qu'une expression renvoie true ou false
if ($b = ($a < 3)) {
  echo $a . " est inférieur à trois" . PHP_EOL;
} else  echo '$b' . " est faux" . PHP_EOL;

//les pièges du transtypage
$nombre = 4;
if ($nombre) {
  echo '$nombre vaut TRUE après transtypage' . PHP_EOL;
} else {
  echo '$nombre vaut FALSE après transtypage' . PHP_EOL;
}

$chaine = "qsdf";
if ($chaine) {
  echo '$chaine vaut TRUE après transtypage' . PHP_EOL;
} else {
  echo '$chaine vaut FALSE après transtypage' . PHP_EOL;
}
$tab = ["sqde"];
if ($tab) {
  echo '$tab vaut TRUE après transtypage' . PHP_EOL;
} else {
  echo '$tab vaut FALSE après transtypage' . PHP_EOL;
}

// Eviter les pièges du transtypage l'opérateur de type
if ($nombre === true) {
  echo '$nombre vaut TRUE après transtypage' . PHP_EOL;
} else {
  echo '$nombre vaut un truc ' . PHP_EOL;
}
$a = 5;
switch ($a) {
  case 5:
    echo '$a est égale à 5' . PHP_EOL;
    break;
  case 6:
    echo '$a est égal à 6' . PHP_EOL;
    break;
  default:
    echo '$a est un nombre <5 ou >6' . PHP_EOL;
    break;
}

/* $a = 50;
while ($a > 0) {
  echo "valeur de a = " . $a . PHP_EOL;
  $a = $a / 4;
} */

// La boucle for
$a = 12;
for ($i = 1; $i < $a; $i++) {
  echo "itération numéro " . $i . " : a = " . $a-- . PHP_EOL;
}

// valeur de l'incrément au départ, condition d'arrêt, incrément ou décrement ou fonction arithmétique
for ($i = 255; $i < 5000; $i = $i * 5 ) {
  echo "Itération avec calcul.Valeur de i =" . $i . PHP_EOL;
}

echo "boucle sur un tableau contenant un  tableau";
$tab_in_tab = [
    54,
    [
        85,
        69,
    ],
];
foreach ($tab_in_tab as $key=>$value) {
  echo PHP_EOL;
    var_dump($key);
    
    /* echo "Valeur de l'élément $key:".$value.PHP_EOL; */
}
