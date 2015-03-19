<?php
	namespace ROGER\PlastProdBundle\Tests\Form;
	use ROGER\PlastProdBundle\Form\NomenclatureType;
	
	class NomenclatureTypeTest extends \PHPUnit_Framework_TestCase
	{
		
		public function testGetName()
		{
			$nomenclatureType= new NomenclatureType();
			$this->assertEquals("roger_plastprodbundle_nomenclature",$nomenclatureType->getName());
		}
	}
?>