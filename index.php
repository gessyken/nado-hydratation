<?php

require 'vendor/autoload.php';

$db = new PDO("mysql:host=127.0.0.1;dbname=nado_hydratation", "root", "");

$manager = new Ken\ProduitManager($db);

// $prod = new Produit(2,'iPhone 14 Pro Max', 800000);

// $prod = $manager->recuperer(3);
// $manager->modifier($prod, 'iPhone 4s', 20k);
// $prod = $manager->recuperer(3);
// var_dump($prod);
$produits = $manager->all();
print_r($produits);
// $manager->ajouter($prod);

