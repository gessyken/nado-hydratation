<?php

class Produit
{
	public int $id;
	public string $nom;
	public float $prix;

	public function __construct(int $id, string $nom, float $prix)
	{
		$this->id = $id;
		$this->nom = $nom;
		$this->prix = $prix;
	}

	public function __toString() : string
	{
		return "Produit $this->id : Nom => $this->nom Prix => $this->prix";
	}

	public function setId(int $id) : void
	{
		$this->id = $id;
	}

	public function setNom(int $nom) : void
	{
		$this->nom = $nom;
	}

	public function setPrix(int $prix) : void
	{
		$this->prix = $prix;
	}

	public function getId() : int
	{
		return $this->id;
	}

	public function getNom() : string
	{
		return $this->nom;
	}

	public function getPrix() : float
	{
		return $this->prix;
	}



}