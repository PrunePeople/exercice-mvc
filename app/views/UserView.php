<?php
// Objectif : Créer une vue pour afficher les informations utilisateur
class UserView {
    public function display(UserModel $userModel) { // Afficher les informations utilisateur stockées dans le modèle
        echo "Informations utilisateur :<br>";
        echo "Nom d'utilisateur : " . $userModel->username;
    }
}
