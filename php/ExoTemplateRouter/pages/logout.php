<?php 
  $_SESSION["login"] = false;
  header('location: http://'.$_SERVER['SERVER_NAME'].':3000/index.php');
?>
<h2>Vous êtes maintenant déconnecté</h2>
