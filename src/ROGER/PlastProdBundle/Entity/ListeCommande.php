<?php

namespace ROGER\PlastProdBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

class ListeCommande
{
	private $commande;
	
	public function getCommande()
	{
		return $this->commande;
	}
	
	public function setCommande(ArrayCollection $commande)
	{
		$this->commande = $commande;
	}
	
	public function __construct()
	{
		$this->commande = new ArrayCollection();
	}
}

?>