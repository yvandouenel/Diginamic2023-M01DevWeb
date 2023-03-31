<?php
include_once(dirname(__FILE__)."/../src/datas/plats.php");
include_once(dirname(__FILE__)."/../src/cantine/menu.php");

?>
<table class='table table-dark table-striped'>
    <thead>
        <th>Entrée</th>
        <th>Plat</th>
        <th>Dessert</th>
    </thead>
<?php
    createRandomMenu($tab,7);
?>
</table>