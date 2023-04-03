<?php
include_once(dirname(__FILE__) . "/../../src/datas/plats.php");

?>
<h2>Gestion de l'ajout ici</h2>
<form class="form" action="/index.php?page=admin&categorie=<?= $_GET["categorie"] ?>&action=add" method="POST">
  <?php
  foreach ($tab as $categorie => $plats) {
    if ($categorie == $_GET["categorie"]) {
      static $i = 0;
      echo '<fieldset>
      <legend class="h3">' . $categorie . '</legend>';
      echo '<div class="ms-2">'
        . '<label for="dish-name-' . $categorie . '">Nom du plat : </label>'
        . '<input id="dish-name-' . $categorie . '" type="text" name="dish_name_' . $_GET["categorie"] . '">'
        . '<input id="dish-category-' . $categorie . '" type="hidden" name="dish_category_' . $_GET["categorie"] . '" value="' . $_GET["categorie"] . '">'
        . '<input  type="submit" value="Ajouter un.e ' . $categorie . '">'
        . '</div>';


      echo '</fieldset>';
      $i++;
    }
  }
  ?>
</form>

<?php
if (isset($_POST['dish_name_' . $_GET["categorie"]])) {

  // récupération du fichier 
  $f = dirname(__FILE__) . "/../../src/datas/plats.csv";
  if (file_exists($f)) {

    // Ouvrir le fichier en mode a : Le pointeur de fichier commence à la fin du fichier.
    $file = fopen($f, 'a');

    // Ecrire dans le fichier
    fwrite($file, "\r\n" . $_GET["categorie"] . ';' . $_POST['dish_name_' . $_GET["categorie"]]);

    // Fermer le fichier
    fclose($file);
    echo  '<h2>'.$_GET["categorie"] . " ajouté.e : " . $_POST['dish_name_' . $_GET["categorie"]].'</h2>';
  } else {
    echo "ERROR: Le fichier n'existe pas.";
  }
}
?>