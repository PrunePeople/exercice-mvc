<?php
// Objectif : Créer un contrôleur pour traiter les demandes utilisateur.
class UserController {
    public function register() { // Afficher le formulaire d'inscription utilisateur
        echo '
        <form action="index.php" method="post">
            <label for="username">Nom d\'utilisateur :</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" value="S\'inscrire">
        </form>';
    }

    public function processRegistration($userData) { // Traiter les informations d'inscription soumises par l'utilisateur
        // Exemple de traitement : enregistrer l'utilisateur dans la base de données
        $username = $userData['username'];
        $password = $userData['password'];

        echo "Inscription réussie pour l'utilisateur : $username avec le mot de passe : $password";
    }
}
