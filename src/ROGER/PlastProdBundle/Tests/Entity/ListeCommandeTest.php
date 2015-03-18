<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\ListeCommande;
	use Doctrine\Common\Collections\ArrayCollection;
	
	class ListeCommandeTest extends \PHPUnit_Framework_TestCase
	{	
		/* test de la méthode setCommande */
		public function testSetCommande()
		{
			$listeCommande = new ListeCommande();
			$listeCommande->setCommande(new ArrayCollection());
			$this->assertEquals(new ArrayCollection(),$listeCommande->getCommande());
		}
	}
?>