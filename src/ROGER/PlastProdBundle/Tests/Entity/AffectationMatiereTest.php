<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\AffectationMatiere;
	use ROGER\PlastProdBundle\Entity\Matiere;
	use ROGER\PlastProdBundle\Entity\Nomenclature;
	
	/* Classe de test sur AffectationMatiere */
	class AffectationMatiereTest extends \PHPUnit_Framework_TestCase
	{	
		/* test sur la méthode setNomenclature */
		public function testSetNomenclature()
		{
			$nomenclature = new Nomenclature();
			$affectationMatiere = new AffectationMatiere();
			$affectationMatiere->setNomenclature($nomenclature);
			$this->assertEquals($nomenclature,$affectationMatiere->getNomenclature());
		}
		
		/* test sur la méthode setMatiere */
		public function testSetMatiere()
		{
			$matiere = new Matiere();
			$affectationMatiere = new AffectationMatiere();
			$affectationMatiere->setMatiere($matiere);
			$this->assertEquals($matiere,$affectationMatiere->getMatiere());
		}
		
		/* test sur la méthode getId */
		public function testGetId()
		{
			$affectationMatiere = new AffectationMatiere();
			$this->assertEquals(null,$affectationMatiere->getId());
		}
		
		/* test sur la methode setQuantite */
		public function testSetQuantite()
		{
			$affectationMatiere = new AffectationMatiere();
			$affectationMatiere->setQuantite(2000);
			$this->assertEquals(2000,$affectationMatiere->getQuantite());
		}
	}
?>