<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hello get</title>
</head>

<body>
  <h1>Hello
    <?php
    if (isset($_GET["firstname"])) {
      echo  $_GET['firstname'] . " ";
    }
    if (isset($_GET["lastname"])) {
      echo  $_GET['lastname'];
    }
    ?>
  </h1>
</body>

</html>