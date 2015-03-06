<?php

namespace ROGER\PlastProdBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

class ListeMatiere
{
	private $matiere;
	
	public function getMatiere()
	{
		return $this->matiere;
	}
	
	public function setMatiere(ArrayCollection $matiere)
	{
		$this->matiere = $matiere;
	}
	
	public function __construct()
	{
		$this->matiere = new ArrayCollection();
	}
}

?>