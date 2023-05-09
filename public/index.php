<?php
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/ContactController.php';
require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/ProductsController.php';
require_once '../app/controllers/UserController.php';
require_once '../app/models/ProductModel.php';
require_once '../app/models/UserModel.php';
require_once '../app/views/UserView.php';

// Instancier un objet AuthController et appeler la méthode login
$authController = new AuthController();
$authController->login();

// Instancier un objet ContactController et appeler la méthode index
$contactController = new ContactController();
$contactController->index();

// Instancier un objet HomeController et appeler la méthode index
$homeController = new HomeController();
$homeController->index();

// Instancier un objet ProductsController et appeler la méthode index
$productsController = new ProductsController();
$productsController->index();

// Instancier un objet UserController et appeler la méthode register
$userController = new UserController();
$userController->register();

// Supposons que les données du formulaire soient soumises via POST
$userData = $_POST;

// Instancier un objet UserController et appeler la méthode processRegistration pour traiter les informations d'inscription utilisateur
$userController->processRegistration($userData);

// Instancier un objet UserModel et stocker les informations utilisateur
$userModel = new UserModel();
$userModel->save($userData);

// Instancier un objet UserView et afficher les informations utilisateur
$userView = new UserView();
$userView->display($userModel);



// Objectif : Utiliser les classes UserModel, UserController et UserView pour afficher les informations utilisateur soumises par le formulaire d'inscription.

$userController = new UserController();
$userController->register(); // Appel de la méthode register poru affciher le formulaire

$userData = $_POST; // Supposons que les données du formulaire soient soumises via POST
$userController->processRegistration($userData); // Appel de la méthode processRegistration pour traiter les informations d'inscription utilisateur

$userModel = new UserModel();
$userModel->username = "JohnDoe";

$userView = new UserView();
$userView->display($userModel); // Appel de la méthode display pour afficher les informations utilisateur stockées dans le modèle