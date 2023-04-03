<?php
$filename = "plats.csv";
$tab = [];
if (file_exists( dirname(__FILE__)."/".$filename)) {
    // Reading the entire file into an array
    $content = file(dirname(__FILE__)."/".$filename) or die("ERROR: Cannot open the file.");
    // Parcours du fichier ligne par ligne
    foreach($content as $line){
      $plat = explode(";", $line);
      // Ajout d'un élément de tableau à la valeur qui correspond à la clé de la catégorie de plat
      $tab[$plat[0]][] = $plat[1];

    }
} else {
    echo "ERROR: Le fichier n'existe pas.";
}

//dirname(__FILE__)
/* $tab = [
                'Entrée' => [
                    'Oeuf mayo',
                    'Carottes râpées',
                    'Artichaut',
                    'Jambon cru',
                    'Taboulé',
                ],
                'Plat principal' => [
                    'Daube',
                    'Steack frites',
                ],
                'Dessert' => [
                    'Tarte aux pommes',
                    'Crème brûlée',
                ]
            ]; */