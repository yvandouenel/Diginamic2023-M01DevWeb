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
        case 'login':
            $page = "loginForm.php";
            break;
        case 'logincheck':
            $page = "login.php";
            break;
        case 'logout':
            $page = "logout.php";
            break;
        case 'admin':
            if ($_SESSION["login"]) {
                if (isset($_GET['action'])) {
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
                        case 'plats':
                            $page = "admin/plats.php";
                            break;
                        default:
                            break;
                    }
                }
            } else $page = "loginForm.php";

            break;
        default:
            break;
    }
}

include_once(dirname(__FILE__) . '/../../pages/' . $page);
