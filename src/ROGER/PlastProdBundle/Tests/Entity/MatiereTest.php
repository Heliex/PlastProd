<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\Matiere;
	use ROGER\PlastProdBundle\Entity\Fournisseur;
	/* classe de tests unitaires sur la classe Matiere */
	class MatiereTest extends \PHPUnit_Framework_TestCase
	{
		/* Test sur la méthode setFournisseur */
		public function testSetFournisseur()
		{
			$fournisseur = new Fournisseur();
			$matiere = new Matiere();
			$matiere->setFournisseur($fournisseur);
			$this->assertEquals($fournisseur,$matiere->getFournisseur());
		}
		
		/* Test sur le méthode getId */
		public function testGetId()
		{
			$matiere = new Matiere();
			$this->assertEquals(null,$matiere->getId());
		}
		
		/* Test sur la méthode setNom */
		public function testSetNom()
		{
			$matiere = new Matiere();
			$matiere->setNom("Barre PVC");
			$this->assertEquals("Barre PVC",$matiere->getNom());
		}
		
		/* Test sur la méthode setQuantiteStock */
		public function testSetQuantiteStock()
		{
			$matiere = new Matiere();
			$matiere->setQuantiteStock(2500);
			$this->assertEquals(2500,$matiere->getQuantiteStock());
		}
		
		/* Test sur la méthode setPrix */
		public function testSetPrix()
		{
			$matiere = new Matiere();
			$matiere->setPrix(50.05);
			$this->assertEquals(50.05,$matiere->getPrix());
		}
	}
?>