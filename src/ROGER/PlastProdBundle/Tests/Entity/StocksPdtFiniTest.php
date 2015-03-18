<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\StockPdtFini;
	use ROGER\PlastProdBundle\Entity\Nomenclature;
	
	class StockPdtFiniTest extends \PHPUnit_Framework_TestCase
	{	
		/* test sur la méthode setNomenclature */
		public function testSetNomenclature()
		{
			$nomenclature = new Nomenclature();
			$stockPdtFini = new StockPdtFini();
			$stockPdtFini->setNomenclature($nomenclature);
			$this->assertEquals($nomenclature,$stockPdtFini->getNomenclature());
		}

		/* test sur la méthode getId */
		public function testGetId()
		{
			$stockPdtFini = new StockPdtFini();
			$this->assertEquals(null,$stockPdtFini->getId());
		}
		
		/* test sur la methode setDateEntree*/
		public function testSetDateEntree()
		{
			$stockPdtFini = new StockPdtFini();
			$stockPdtFini->setDateEntree(new \DateTime());
			$this->assertEquals(new \DateTime(),$stockPdtFini->getDateEntree());
		}
		
		/* test sur la méthode setEtiquette */
		public function testSetEtiquette()
		{
			$stockPdtFini = new StockPdtFini();
			$stockPdtFini->setEtiquette("ET02025");
			$this->assertEquals("ET02025",$stockPdtFini->getEtiquette());
		}
		
		/* test sur la méthode setDeffectueux */
		public function testSetDeffectueux()
		{
			$stockPdtFini = new StockPdtFini();
			$stockPdtFini->setDeffectueux(false);
			$this->assertEquals(false,$stockPdtFini->getDeffectueux());
		}
		
	}
?>