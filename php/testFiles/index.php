<?php
/* $f = "myfile.txt";
    
$content = "The quick brown fox jumps over the lazy dog."; // String of data to be written
$file = fopen($f, "w") or die("ERROR: Cannot open the file."); // Open the file for writing
fwrite($file, $content) or die ("ERROR: Cannot write to file."); // Write data to the file
fclose($file); // Closing the file
echo "Data written successfully."; */

/* Test de lecture d'un fichier csv */
$filename = "plats.csv";

/* création d'un tableau */
$categories = [];
// Check the existence of file
if (file_exists($filename)) {
    // Reading the entire file into an array
    $content = file($filename) or die("ERROR: Cannot open the file.");
    // Parcours du fichier ligne par ligne
    foreach($content as $line){
      $plat = explode(";", $line);
      // Ajout d'un élément de tableau à la valeur qui correspond à la clé de la catégorie de plat
      $categories[$plat[0]][] = $plat[1];

    }
} else {
    echo "ERROR: File does not exist.";
}
var_dump($categories);