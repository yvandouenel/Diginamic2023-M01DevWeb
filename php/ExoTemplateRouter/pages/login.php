<h2>Gestion du login</h2>
<?php
include(dirname(__FILE__) . "/../src/core/manage_users.php");
if (isset($_POST) && $_POST["login"] &&  $_POST["pwd"]) {
  $users = read_users();
  /* var_dump($users); */
  if (isLoggedIn($users, $_POST["pwd"], $_POST["login"])) {
    // La personne est bien identifiée donc j'utilise le mécanisme des sessions
    if (isset($_SESSION)) {
      $_SESSION["login"] = true;
      header('location: http://'.$_SERVER['SERVER_NAME'].':3000/index.php');
    }
  } else {
    echo PHP_EOL . "<br>" . "<h3>pb de login ou de mot de passe</h3>";
    echo PHP_EOL . "<br>" . '<a href="index.php?page=login">Retour au formulaire d\'identification</a>';
  }
  // récupération du login et pwd venus de la méthode post
}

?>