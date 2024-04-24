<?php

try { // On se connecte à MySQL
    error_reporting(E_ALL & ~E_WARNING);
    $email = $_POST['mail'];
    $password = $_POST['psw'];
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=streaming', 'andy', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $pdo_options));

    $sql = "SELECT * FROM users WHERE login = '$email' ";
    $result = $bdd->prepare($sql);
    $result->execute();

    if (isset($_POST['mail']) && isset($_POST['psw'])) {
        $data = $result->fetchAll();
        if (password_verify($password, $data[0]["password"])) {
            echo "<p class=\"alert\">Vous êtes bien connectés !
                        </p>";
            $_SESSION['name'] = $data[0]["prénom"];
           // header('Location: index.php');

            echo "<script>";
            echo "console.log('Contenu de la variable de session name : " . $_SESSION['name'] . "')";
            echo "</script>";
        } else {
            echo "<p class=\"alert\">Identifiants Invalides !!!
                        </p>";
        }
    }
} catch (Exception $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
