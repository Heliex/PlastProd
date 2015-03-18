<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\AffectationCommande;
	use ROGER\PlastProdBundle\Entity\Commande;
	use ROGER\PlastProdBundle\Entity\Nomenclature;
	
	class AffectationCommandeTest extends \PHPUnit_Framework_TestCase
	{
		/* test sur la méthode setCommande */
		public function testSetCommande()
		{
			$commande = new Commande();
			$affectationCommande = new AffectationCommande();
			$affectationCommande->setCommande($commande);
			$this->assertEquals($commande,$affectationCommande->getCommande());
		}
		
		/* test sur la méthode setNomenclature */
		public function testSetNomenclature()
		{
			$nomenclature = new Nomenclature();
			$affectationCommande = new AffectationCommande();
			$affectationCommande->setNomenclature($nomenclature);
			$this->assertEquals($nomenclature,$affectationCommande->getNomenclature());
		}
		
		/* test sur la méthode getId */
		public function testGetId()
		{
			$affectationCommande = new AffectationCommande();
			$this->assertEquals(null,$affectationCommande->getId());
		}
		
		/* test sur la méthode setQuantite */
		public function testSetQuantite()
		{
			$affectationCommande = new AffectationCommande();
			$affectationCommande->setQuantite(150);
			$this->assertEquals(150,$affectationCommande->getQuantite());
		}
	}
?>