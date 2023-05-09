<?php
// Objectif : Créer un espace membre avec une page de connexion, une page d'inscription et une page d'accueil réservée aux membres.

class AuthController extends Controller {
    public function login() {
        $this->view('auth/login');
    }

    public function register() {
        $this->view('auth/register');
    }
}
