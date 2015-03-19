<?php
	namespace ROGER\PlastProdBundle\Tests\Form;
	use ROGER\PlastProdBundle\Form\StockPdtFiniType;
	
	class StockPdtFiniTypeTest extends \PHPUnit_Framework_TestCase
	{
		
		public function testGetName()
		{
			$stockPdtFiniType= new StockPdtFiniType();
			$this->assertEquals("roger_plastprodbundle_stockpdtfini",$stockPdtFiniType->getName());
		}
	}
?>