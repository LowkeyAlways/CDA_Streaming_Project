<?php

class UserModel {

    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function register($nom, $prenom, $email, $password, $pays) {
        try {
            // Vérifie si l'utilisateur est déjà inscrit
            $sql = "SELECT * FROM users WHERE login = :email";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                // Utilisateur déjà inscrit
                return 'exists';
            } else {
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (nom, prénom, login, password, pays) VALUES (:nom, :prenom, :email, :password, :pays)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':nom', $nom);
                $stmt->bindParam(':prenom', $prenom);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $passwordHash);
                $stmt->bindParam(':pays', $pays);
                $stmt->execute();
                return 'success';
            }
        } catch (PDOException $e) {
            die("Erreur d'inscription : " . $e->getMessage());
        }
    }

    public function login($email, $password) {
        try {
            $sql = "SELECT * FROM users WHERE login = :email";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['name'] = $user['prénom'];
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }
}
?>
