<?php
// Objectif : Créer un contrôleur pour afficher une liste de produits en utilisant une vue 

class ProductsController extends Controller {
    public function index() {
        $productModel = new ProductModel();
        $products = $productModel->getProducts();
        $this->view('products/index', ['products' => $products]);
    }
}
