<?php
	namespace ROGER\PlastProdBundle\Tests\Form;
	use ROGER\PlastProdBundle\Form\ListeStockPdtFiniType;
	
	class ListeStockPdtFiniTypeTest extends \PHPUnit_Framework_TestCase
	{
		
		public function testGetName()
		{
			$listeStockPdtFiniType= new ListeStockPdtFiniType();
			$this->assertEquals("roger_plastprodbundle_listepdtfini",$listeStockPdtFiniType->getName());
		}
	}
?>