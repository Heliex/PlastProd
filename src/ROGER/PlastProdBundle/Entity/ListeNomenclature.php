<?php

namespace ROGER\PlastProdBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

class ListeNomenclature
{
	private $nomenclature;
	
	public function getNomenclature()
	{
		return $this->nomenclature;
	}
	
	public function setNomenclature(ArrayCollection $nomenclature)
	{
		$this->nomenclature = $nomenclature;
	}
	
	public function __construct()
	{
		$this->nomenclature = new ArrayCollection();
	}
}

?>