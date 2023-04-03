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
        default:
            break;
    }
    
}
if (isset($_GET['action'])){
    switch ($_GET['action']) {
        case 'add':
            $page = "admin/add.php";
            break;
        case 'update':
            $page = "admin/update.php";
            break;
        case 'delete':
            $page = "admin/delete.php";
            break;
        default:
            break;
    }
}
include_once(dirname(__FILE__) . '/../../pages/' . $page);
