<?php
class ProductModel {
    public function getProducts() {
        // Retourne une liste de produits à partir de la base de données
        $products = [
            ['name' => 'Produit 1', 'price' => 10],
            ['name' => 'Produit 2', 'price' => 20],
            ['name' => 'Produit 3', 'price' => 30]
        ];

        return $products;
    }
}