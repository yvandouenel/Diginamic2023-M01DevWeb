<?php
include_once(dirname(__FILE__) . "/../../src/datas/plats.php");
// Suppression du plat dans $tab
foreach ($tab[$_GET["key"]] as $key => $plat) {
  if (trim($plat) == trim($_GET["value"])) {
    echo "<h2>Suppression du plat \"$plat\" effectuée</h2>";
    // Suppression du plat dans le tableau
    unset($tab[$_GET["key"]][$key]);
    // Suppression du fichier plats
    $filename = dirname(__FILE__) . "/../../src/datas/plats.csv";
    if (file_exists($filename)) {
      $status  = unlink($filename) ? 'The file ' . $filename . ' has been deleted' : 'Error deleting ' . $filename;
    }
    // Réécriture du fichier plats
    // Ouvrir le fichier en mode a : Le pointeur de fichier commence à la fin du fichier.
    $file = fopen($filename, 'a');

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
include(dirname(__FILE__) . '/../../pages/plats.php');
?>




