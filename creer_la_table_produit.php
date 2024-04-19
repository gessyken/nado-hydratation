<?php

$sql = "CREATE TABLE produits (id int auto_increment primary key, nom varchar(50),prix float)";

try {
	$db = new PDO("mysql:host=127.0.0.1;dbname=nado_hydratation", "root", "");
	$db->exec($sql);
	echo "Table produits creee avec succes";
} catch (Exception $e) {
	echo $e->getMessage();
}