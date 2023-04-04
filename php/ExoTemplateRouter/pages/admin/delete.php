<?php
include_once(dirname(__FILE__) . "/../../src/datas/plats.php");
// Suppression du plat dans $tab
foreach ($tab[$_GET["key"]] as $key => $plat) {
  if (trim($plat) == trim($_GET["value"])) {
    echo "<h2>Suppression du plat \"$plat\" effectuée</h2>";
    // Suppression du plat dans le tableau
    unset($tab[$_GET["key"]][$key]);
    $filename = dirname(__FILE__) . "/../../src/datas/plats.csv";
   
    // Réécriture du fichier plats
    // Ouvrir le fichier en mode a : Le pointeur de fichier commence à la fin du fichier.
    $file = fopen($filename, 'w');

    // Ecrire dans le fichier
    foreach ($tab as $key => $table) {
      foreach ($table as $plat) {
        fwrite($file, $key . ';' . $plat);
      }
    }

    // Fermer le fichier
    fclose($file);
    
  }
}
?>
<?php
include(dirname(__FILE__) . '/../../pages/admin/plats.php');
?>




