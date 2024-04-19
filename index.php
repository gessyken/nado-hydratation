<?php

require_once 'Produit.php';
require_once 'ProduitManager.php';

$db = new PDO("mysql:host=127.0.0.1;dbname=nado_hydratation", "root", "");

$manager = new ProduitManager($db);

// $prod = new Produit(2, 'iPhone 14 Pro Max', 800000);

$prod = $manager->recuperer(3);

var_dump($prod);

// $manager->ajouter($prod);

// Hello guys