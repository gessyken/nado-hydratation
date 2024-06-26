<?php

namespace Ken;

use Ken\Produit;

class ProduitManager 
{
	protected \PDO $database;

	public function __construct(\PDO $db)
	{
		$this->database = $db;
	}

	public function ajouter(Produit $prod) : void
	{
		$sql = "INSERT INTO produits (nom, prix) VALUES ('$prod->nom', $prod->prix)";

		try 
		{
			$this->database->exec($sql);
			echo "Produit ajoute !";
		} 
		catch (Exception $e) 
		{
			echo $e->getMessage();
		}
	}

	public function recuperer(int $id) : ?Produit
	{
	 	$sql = "SELECT * FROM produits WHERE id = $id LIMIT 1";

	 	try {
			$stmt = $this->database->query($sql);
			if ($stmt->rowCount() > 0) 
			{
				$data = $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
			}
			else
			{
				return null;
			}
		} catch (Exception $e) {
			$e->getMessage();
		}

		return new Produit($data['id'], $data['nom'], $data['prix']);

	}

	public function all()
	{
		$sql= " SELECT * FROM produits";
		try 
		{
			$stmt = $this->database->query($sql);
			$data = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			$produits = [];

				foreach ($data as $produit)
				{
					$produits[] = new Produit($produit['id'], $produit['nom'], $produit['prix']);
				}

				return $produits;
		} 
		catch(Exception $e)
			{
				$e->getMessage();

			}		
	}
}