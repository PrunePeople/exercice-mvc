<?php
// Objectif : Créer un formulaire de contact en utilisant un contrôleur et une vue.

class ContactController extends Controller {
    public function index() {
        $this->view('contact/index');
    }

    public function submit($formData) {
        // Envoyer les données du formulaire de contact par email
        // à une adresse prédéfinie
        $this->sendEmail('contact@example.com', $formData);
        $this->view('contact/success');
    }
}
