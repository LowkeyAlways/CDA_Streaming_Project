<?php

try {
    if (isset($_POST['submit'])) {
        error_reporting(E_ALL & ~E_WARNING);
        $nom = $_POST['nom'];
        $prenom = $_POST['prénom'];
        $email = $_POST['mail'];
        $password = $_POST['psw'];
        $pays = $_POST['pays'];


        // On se connecte à MySQL
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=streaming', 'andy', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $pdo_options));

        // Verifie si l'utilisateur est déja inscrit
        $sql = "SELECT * FROM users WHERE login = '$email' ";
        $result = $bdd->prepare($sql);
        $result->execute();

        if ($result->rowCount() > 0) {
            if (password_verify($password, $data['password'])) {
                echo "<p class=\"alert\">Vous êtes déja inscrit, 
                <a href=\"../View/Login.php\" class=\"success\" title=\"pub\">Connectez vous</a>
                </p>";
                $_SESSION['email'] = $email;
            } else {

                echo "<p class=\"alert\">Cette adresse mail est déja utilisé !!!</p>";
            }
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (nom, prénom, login, password, pays) VALUES ('$nom', '$prenom', '$email', '$password', '$pays')";
            $req = $bdd->prepare($sql);
            $req->execute();
            echo "<p class=\"alert\">Inscription effectuée :
                 <a href=\"../View/Login.php\" class=\"success\" title=\"pub\">Connectez vous</a>
                 </p>";
        }
        $result->closeCursor();
    }
} catch (Exception $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
