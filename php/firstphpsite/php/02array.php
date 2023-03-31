<?php
// déclarer un tableau de fruits
$fruits = ["Banane", "Fraise", "Poire"];
array_push($fruits, "Abricot");
$fruits[] = "Kiwi";

//var_dump($fruits);

foreach ($fruits as $fruit) {
  $fruit .= " - ";
  echo $fruit;
}
var_dump($fruits);

// tableau associatif du menu de la cantine
$plats = [
  "lundi" => "Purée",
  "Mardi" => "Frites",
  "Mercredi" => "Hachis parmentier",
];
var_dump($plats);
foreach ($plats as $jour => $plat) {
  echo "jour :  $jour $plat " . PHP_EOL;
}
echo count($plats);
var_dump($fruits);
if (in_array("Banane", $fruits)) {
  echo "J'ai la banane";
}

$parts = ['apple', 'pear'];
// copie par valeur 
$fruits = ['banana', 'orange', ...$parts, 'watermelon'];
$parts[] = "blueberry";
var_dump($fruits);

$very_complex_array = [
  [
    "nom" => "Tartenpion",
    "identite" => [
      "prenom" => "Didier",
      "date_naissance" => "2020-10-10",
      "adresse" => [
        "rue" => "nulle part",
        "code_postal" => "34000",
        "ville" => "Montpellier"
      ]
    ]
  ],
  [
    "nom" => "Tartenpion2",
    "identite" => [
      "prenom" => "Didier",
      "date_naissance" => "2020-10-10",
      "adresse" => [
        "rue" => "nulle part",
        "code_postal" => "34500",
        "ville" => "Montpellier"
      ]
    ]
  ]
];
echo $very_complex_array[0]['identite']['adresse']['code_postal'];
