<?php
$page = 'accueil.php';
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'menus':
            $page = "menus.php";
            break;
        case 'plats':
            $page = "plats.php";
            break;
       // cas du menu à gérer ici
        default:
            break;
    }
}
include_once(dirname(__FILE__).'/../../pages/'.$page);