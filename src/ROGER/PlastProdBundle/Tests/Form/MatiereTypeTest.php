<?php
	namespace ROGER\PlastProdBundle\Tests\Form;
	use ROGER\PlastProdBundle\Form\MatiereType;
	
	class MatiereTypeTest extends \PHPUnit_Framework_TestCase
	{
		
		public function testGetName()
		{
			$matiereType= new MatiereType();
			$this->assertEquals("roger_plastprodbundle_matiere",$matiereType->getName());
		}
	}
?>