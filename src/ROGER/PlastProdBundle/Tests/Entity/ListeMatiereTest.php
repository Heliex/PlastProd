<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\ListeMatiere;
	use Doctrine\Common\Collections\ArrayCollection;
	
	/* Classe de teste sur la classe ListeMatiere */
	class ListeMatiereTest extends \PHPUnit_Framework_TestCase
	{	
		/* test de la méthode setMatiere */
		public function testSetMatiere()
		{
			$listeMatiere = new ListeMatiere();
			$listeMatiere->setMatiere(new ArrayCollection());
			$this->assertEquals(new ArrayCollection(),$listeMatiere->getMatiere());
		}
	}
?>