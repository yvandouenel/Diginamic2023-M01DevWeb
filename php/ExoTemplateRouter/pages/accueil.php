<?php
include_once(dirname(__FILE__) . "/../src/datas/plats.php");
?>
<h1>Accueil</h1>
<h2>Ajouter un plat</h2>
<ul class="list-unstyled d-flex gap-3">
  <?php
  foreach ($tab as $categorie => $plats) {
    static $i = 0;
    echo '<li><a href="/index.php?page=admin&categorie=' .  $categorie . '&action=add" class="btn btn-secondary">' . $categorie . '</a></li>';
    $i++;
  }
  ?>
</ul>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex est, quasi libero, doloremque magnam nam atque veniam sint quae, voluptate officiis ipsum earum aperiam quibusdam natus modi animi. Provident, reprehenderit?</p>
