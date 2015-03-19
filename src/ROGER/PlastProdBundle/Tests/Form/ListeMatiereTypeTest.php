<?php
	namespace ROGER\PlastProdBundle\Tests\Form;
	use ROGER\PlastProdBundle\Form\ListeMatiereType;
	
	class ListeMatiereTypeTest extends \PHPUnit_Framework_TestCase
	{
		
		public function testGetName()
		{
			$listeMatiereType= new ListeMatiereType();
			$this->assertEquals("roger_plastprodbundle_listematiere",$listeMatiereType->getName());
		}
	}
?>