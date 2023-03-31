<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hello post</title>
</head>

<body>
  <h1>Hello
  <?php
    if (isset($_POST["firstname"])) {
      echo  $_POST['firstname'] . " ";
    }
    if (isset($_POST["lastname"])) {
      echo  $_POST['lastname'];
    }
    ?>
  </h1>
</body>

</html>