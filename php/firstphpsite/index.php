<?php $foo = "foo" ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test apache</title>
</head>

<body>
  <?= $foo ?>
  <h1>Le serveur répond !!!</h1>
  <?php
  var_dump($GLOBALS["_GET"]);
  echo PHP_EOL . "<br>";
  var_dump($_SERVER['PATH_INFO']);
  echo PHP_EOL . PHP_VERSION . "<br>";

  ?>
</body>

</html>