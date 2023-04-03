<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session</title>
</head>

<body>
  Test session
  <?php if(isset($_SESSION["login"]) && $_SESSION["login"] === true) : ?>
    <h2>Utilisateur identifé</h2>
  <?php else : ?>
    <h2>Utilisateur non identifé</h2>
  <?php endif ?>
  
</body>

</html>