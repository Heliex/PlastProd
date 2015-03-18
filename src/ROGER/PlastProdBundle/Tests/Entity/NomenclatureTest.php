<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\Nomenclature;
	
	class NomenclatureTest extends \PHPUnit_Framework_TestCase
	{
		/* test sur la méthode getId */
		public function testGetId()
		{
			$nomenclature = new Nomenclature();
			$this->assertEquals(null,$nomenclature->getId());
		}
		
		/* test sur la méthode setNom */
		public function testSetNom()
		{
			$nomenclature = new Nomenclature();
			$nomenclature->setNom("Aile Carrosserie Plastique");
			$this->assertEquals("Aile Carrosserie Plastique",$nomenclature->getNom());
		}
		
		/* test sur la méthode setCheminDoc */
		public function testSetCheminDoc()
		{
			$nomenclature = new Nomenclature();
			$nomenclature->setCheminDoc("C:/Users/Test/Image.gif");
			$this->assertEquals("C:/Users/Test/Image.gif",$nomenclature->getCheminDoc());
		}
		
		/* test sur la méthode setTempsProduction */
		public function testSetTempsProduction()
		{
			$nomenclature = new Nomenclature();
			$nomenclature->setTempsProduction(time());
			$this->assertEquals(time(),$nomenclature->getTempsProduction());
		}
		
		/* test sur la méthode setTempsAssemblage */
		public function testSetTempsAssemblage()
		{
			$nomenclature = new Nomenclature();
			$nomenclature->setTempsAssemblage(time());
			$this->assertEquals(time(),$nomenclature->getTempsAssemblage());
		}
	}
?>