<?php

include_once "../Models/UserModel.php";

class UserController {

    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }


    public function subscribe() {
        if (isset($_POST['submit'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prénom'];
            $email = $_POST['mail'];
            $password = $_POST['psw'];
            $pays = $_POST['pays'];

            $userModel = new UserModel($this->db);

            $registerStatus = $userModel->register($nom, $prenom, $email, $password, $pays);

            if ($registerStatus === 'success') {
                echo "<p class=\"alert\">Inscription effectuée :
                      <a href=\"../View/Login.php\" class=\"success\" title=\"pub\">Connectez vous</a>
                      </p>";
            } elseif ($registerStatus === 'exists') {
                echo "<p class=\"alert\">Vous êtes déja inscrit, 
                <a href=\"../View/Login.php\" class=\"success\" title=\"pub\">Connectez vous</a>
                </p>";
            } else {
                echo "<p class=\"alert\">Une erreur s'est produite lors de l'inscription.</p>";
            }
        }
    }

    public function connexion() {
        if (isset($_POST['submit'])) {
            $email = $_POST['mail'];
            $password = $_POST['psw'];

            $userModel = new UserModel($this->db);

            if ($userModel->login($email, $password)) {
                header('Location: ../Views/Location.php');
                exit();
            } else {
                echo "<p class=\"alert\">Identifiants incorrects. Veuillez réessayer.</p>";
            }
        }
    }
}
?>
