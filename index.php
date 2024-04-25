<?php
include_once "./config/db_conn.php";

$action = isset($_GET['action']) ? $_GET['action'] : 'default';

switch ($action) {
    case 'login':
        include_once "./Views/Login.php";
        break;

    case 'connexion':
        $userController->connexion();
        break;

    case 'register':
        include_once "./Views/Subscribe.php";
        break;

    case 'subscribe':
        $userController->subscribe();
        break;

    case 'nosfilms':
        include_once "./Views/NosFilms.php";
        break;

    case 'location':
      include_once "./Views/Location.php";
      break;

    default:
        include_once "./Views/Home.php";
}
?>
