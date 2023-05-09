<?php
// Objectif : Créer un contrôleur pour traiter les demandes utilisateur.
class UserController {
    public function register() {
        include(__DIR__ . '/../views/auth/register.php');
    }

    public function processRegistration($userData) {
        $userModel = new UserModel();
        $userModel->save($userData);
    }
}




// class UserController {
//     public function register() {
//         echo '
// <form action="index.php" method="post">
//     <label for="username">Nom d\'utilisateur :</label>
//     <input type="text" id="username" name="username" required><br>
//     <label for="password">Mot de passe :</label>
//     <input type="password" id="password" name="password" required><br>
//     <input type="submit" value="S\'inscrire">
// </form>';
//     }

    // public function processRegistration($userData) {
    //     if (isset($userData['username']) && isset($userData['password'])) {
    //         $username = $userData['username'];
    //         $password = $userData['password'];

    //         echo "Inscription réussie pour l'utilisateur : $username avec le mot de passe : $password";
    //     } else {
    //         echo "Erreur lors du traitement de l'inscription : données utilisateur manquantes.";
    //     }
    // }
    
//     public function processRegistration() {
//         // Récupérer les données du formulaire soumises par l'utilisateur
//         $userData = $_POST;
//         $userModel = new UserModel();
//         $userModel->save($userData);
//         echo "User registered successfully!";
//     }
// }