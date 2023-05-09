<?php
// Objectif : Créer un espace membre avec une page de connexion, une page d'inscription et une page d'accueil réservée aux membres.

class HomeController extends Controller {
    public function index() {
        $this->view('home/index');
    }
}