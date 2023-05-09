<?php
// Objectif : Créer un modèle pour stocker des données utilisateur.
class UserModel { // Définition d'une classe
    public $username; // Ajout d'une propriété

    public function save($userData) { // Ajout d'une méthode
        $this->username = $userData['username'];
    }
}
