<?php
// Objectif : Créer une vue pour afficher les informations utilisateur
class UserView {
    public function display($userData) { // Afficher les informations utilisateur stockées dans le modèle
        echo "Informations utilisateur :<br>";
        echo "Username: " . $userData['username'];
    }
}
