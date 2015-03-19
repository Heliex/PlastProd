<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\Nomenclature;
	
	class NomenclatureTest extends \PHPUnit_Framework_TestCase
	{
		/* Test sur la méthode getId */
		public function testGetId()
		{
			$nomenclature = new Nomenclature();
			$this->assertEquals(null,$nomenclature->getId());
		}
		
		/* Test sur la méthode setNom */
		public function testSetNom()
		{
			$nomenclature = new Nomenclature();
			$nomenclature->setNom("Aile Carrosserie Plastique");
			$this->assertEquals("Aile Carrosserie Plastique",$nomenclature->getNom());
		}
		
		/* Test sur la méthode setCheminDoc */
		public function testSetCheminDoc()
		{
			$nomenclature = new Nomenclature();
			$nomenclature->setCheminDoc("C:/Users/Test/Image.gif");
			$this->assertEquals("C:/Users/Test/Image.gif",$nomenclature->getCheminDoc());
		}
		
		/* Test sur la méthode setTempsProduction */
		public function testSetTempsProduction()
		{
			$nomenclature = new Nomenclature();
			$nomenclature->setTempsProduction(time());
			$this->assertEquals(time(),$nomenclature->getTempsProduction());
		}
		
		/* Test sur la méthode setTempsAssemblage */
		public function testSetTempsAssemblage()
		{
			$nomenclature = new Nomenclature();
			$nomenclature->setTempsAssemblage(time());
			$this->assertEquals(time(),$nomenclature->getTempsAssemblage());
		}
		
		/* Test sur la méthode setId */
		public function testSetId()
		{
			$nomenclature = new Nomenclature();
			$nomenclature->setId(15);
			$this->assertEquals(15,$nomenclature->getId());
		}
		
		/* Test sur la methode setAffectationMatiere */
		public function testSetAffectationMatiere()
		{
			$nomenclature = new Nomenclature();
			$nomenclature->setAffectationMatiere(10);
			$this->assertEquals(10,$nomenclature->getAffectationMatiere());
		}
	}
?>