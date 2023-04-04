<?php
include_once(dirname(__FILE__) . "/../../src/datas/plats.php");
?>
<?php if (!isset($_POST['dish_name'])) { ?>
  <form class="form" action="/index.php?page=admin&key=<?= $_GET["key"] ?>&value=<?= urldecode($_GET["value"]) ?>&action=update" method="POST">
    <?php
    foreach ($tab as $categorie => $plats) {
      if (trim($categorie) == trim($_GET["key"])) {
        echo "Modification de la categorie " . $categorie;
        foreach ($plats as $plat) {
         
          if (trim($plat) == urldecode(trim($_GET["value"]))) {
            echo "<br>".urldecode(trim($_GET["value"]));
            echo "<br>".trim($plat);
            // Modification du plat
            echo "\t" . PHP_EOL . '<label for="dish-name">Plat</label>' .
              "\t" . PHP_EOL . '<input id="dish-name" type="text" name="dish_name" value="' . urlencode($plat) . '">' .
              "\t" . PHP_EOL . '<input type="submit" value="Modifier">';
          }
        }
      }
    }
    ?>
  </form>

<?php } ?>

<?php
// Modification du plat dans $tab
if (isset($_POST['dish_name'])) {
  //var_dump($_POST['dish_name']);

   foreach ($tab[$_GET["key"]] as $key => $plat) {
    if (trim($plat) == trim($_GET["value"])) {
      echo "<h2>Mise à jour du plat \"$plat\" effectuée</h2>";
      //var_dump($_POST['dish_name']);
      // Mise à jour du plat dans le tableau. ATTENTION à bien ajouter un saut de ligne avec PHP_EOL
      $tab[$_GET["key"]][$key] = $_POST['dish_name'].PHP_EOL;
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
  include(dirname(__FILE__) . '/../../pages/admin/plats.php');
}

?>
