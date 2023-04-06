<?php
require 'vendor/autoload.php';
use App\Card;
$card = new Card("Nom de l'inventeur du web ?", "Tim Berners-Lee");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Affichage d'une instance de classe</title>
</head>
<body>
 
  <dl>
    <dt>Question</dt>
    <dd><?=$card->getQuestion() ?></dd>
    <dt>Réponse</dt>
    <dd><?=$card->getAnswer() ?></dd>
</dl>
<dt>Date</dt>
<dd><?= $card->getDate()->format('Y-m-d H:i:s') ?></dd>
  
</body>
</html>