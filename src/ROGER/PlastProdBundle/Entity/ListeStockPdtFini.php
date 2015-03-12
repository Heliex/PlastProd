<?php

namespace ROGER\PlastProdBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

class ListeStockPdtFini
{
	private $pdtFini;
	
	public function getPdtFini()
	{
		return $this->pdtFini;
	}
	
	public function setPdtFini(ArrayCollection $pdt)
	{
		$this->pdtFini = $pdt;
	}
	
	public function __construct()
	{
		$this->pdtFini = new ArrayCollection();
	}
}

?>