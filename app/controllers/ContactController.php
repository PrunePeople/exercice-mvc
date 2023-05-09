<?php
// Objectif : Créer un formulaire de contact en utilisant un contrôleur et une vue.

class ContactController extends Controller {
    public function index() {
        $this->view('contact/index');
    }

    public function submit($formData) {
        // Récupérer les données du formulaire de contact
        // Envoyer les données par email à une adresse prédéfinie
    }
}
