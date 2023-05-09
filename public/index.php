<?php
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/ContactController.php';
require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/ProductsController.php';
require_once '../app/controllers/UserController.php';
require_once '../app/models/ProductModel.php';
require_once '../app/models/UserModel.php';
require_once '../app/views/UserView.php';

$userController = new UserController();

// Afficher le formulaire d'inscription utilisateur
$userController->register();

// Traiter les informations d'inscription soumises par l'utilisateur
$userData = [
    'username' => $_POST['username']
];
$userController->processRegistration($userData);

// Afficher les informations utilisateur stockées dans le modèle
$userView = new UserView();
$userView->display($userData);