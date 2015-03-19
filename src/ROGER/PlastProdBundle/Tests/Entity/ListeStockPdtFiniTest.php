<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\ListeStockPdtFini;
	use Doctrine\Common\Collections\ArrayCollection;
	
	/* Classe de teste sur la classe ListeStockPdtFini */
	class ListeStockPdtFiniTest extends \PHPUnit_Framework_TestCase
	{	
		/* test de la méthode setPdtFini */
		public function testSetPdtFini()
		{
			$listePdtFini = new ListeStockPdtFini();
			$listePdtFini->setPdtFini(new ArrayCollection());
			$this->assertEquals(new ArrayCollection(),$listePdtFini->getPdtFini());
		}
	}
?>