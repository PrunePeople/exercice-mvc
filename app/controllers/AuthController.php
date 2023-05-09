<?php
// Objectif : Créer un espace membre avec une page de connexion, une page d'inscription et une page d'accueil réservée aux membres.
class Controller {
    protected function view($viewName, $data = []) {
        // Inclure le fichier de vue spécifié avec les données passées
        extract($data);
        include(__DIR__ . '/../views/' . $viewName . '.php');
    }
}


class AuthController extends Controller {
    public function login() {
        $this->view('auth/login');
    }

    public function register() {
        $this->view('auth/register');
    }
}



