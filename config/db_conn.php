<?php
// Connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=streaming', 'andy', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $pdo_options));

// Inclure le fichier UserController.php
include_once "../Controllers/UserController.php";

// Créer une instance du contrôleur UserController en lui passant la connexion à la base de données
$userController = new UserController($db);
?>
