<?php
include_once(dirname(__FILE__) . "/../../src/datas/plats.php");
?>
<?php if (!isset($_POST['dish_name'])) { ?>
  <form enctype="multipart/form-data" class="form" action="/index.php?page=admin&key=<?= $_GET["key"] ?>&value=<?= urldecode($_GET["value"]) ?>&action=addimage" method="POST">
    <!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
    Choisir une image pour <?= $_GET["value"] ?> : <input type="file" id="file-upload" name="uploadedFile">
    <input type="submit" value="Envoyer le fichier" />
  </form>

<?php } ?>

<?php
// Modification ou ajout d'un fichier image
if (isset($_FILES) && isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
  $uploaddir = dirname(__FILE__) . "/../../images/";
  $uploadfile = $uploaddir . basename($_FILES['uploadedFile']['name']);


  if (move_uploaded_file($_FILES['uploadedFile']['tmp_name'], $uploadfile)) {
    echo "Le fichier est valide, et a été téléchargé
           avec succès. Voici plus d'informations :\n";
  } else {
    echo "Attaque potentielle par téléchargement de fichiers.
          Voici plus d'informations :\n";
    echo '<br>' . $_FILES['uploadedFile']['tmp_name'];
  }

  echo 'Voici quelques informations de débogage :';
  print_r($_FILES);

  // Modification du plat
  foreach ($tab[$_GET["key"]] as $key => $plat) {
    if (trim($plat) == trim($_GET["value"])) {
      echo "<h2>Mise à jour du plat \"$plat\" effectuée</h2>";
      //var_dump($_POST['dish_name']);
      // Mise à jour du plat dans le tableau. ATTENTION à bien ajouter un saut de ligne avec PHP_EOL
      $tab[$_GET["key"]][$key] = $_GET['value'] . ";" . $_FILES['uploadedFile']['name'] . PHP_EOL;
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
} //else echo "pb d'upload : " . $_FILES['uploadedFile']['error'];


?>