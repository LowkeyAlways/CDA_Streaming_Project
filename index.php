<?php
// Inclure le fichier bootstrap.php pour initialiser la connexion à la base de données et le contrôleur UserController
include_once "./config/db_conn.php";

// Analyser l'URL pour déterminer quelle action de contrôleur doit être exécutée
$action = isset($_GET['action']) ? $_GET['action'] : 'default';

// Sélectionner le contrôleur approprié en fonction de l'action demandée
switch ($action) {
    case 'login':
        // Appeler la méthode login dans le contrôleur UserController
        $userController->connexion();
        break;
    case 'subscribe':
        // Appeler la méthode subscribe dans le contrôleur UserController
        $userController->subscribe();
        break;
    case 'nosfilms':
        // Inclure le fichier NosFilms.php
        include_once "./Views/NosFilms.php";
        break;
    default:
        // Action par défaut si aucune action spécifique n'est demandée
        // Par exemple, rediriger vers une page d'accueil ou afficher une erreur 404
        echo "Page not found";
}
?>
