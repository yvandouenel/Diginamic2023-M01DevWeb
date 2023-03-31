<?php
$page = 'accueil.php';
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'plats':
            $page = "plats.php";
            break;
        case "menus":
            $page = "menus.php";
            break;
        default:
            break;
    }
}
include_once(dirname(__FILE__).'/../../pages/'.$page);