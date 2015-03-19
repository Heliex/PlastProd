<?php
	namespace ROGER\PlastProdBundle\Tests\Form;
	use ROGER\PlastProdBundle\Form\ListeCommandeType;
	
	class ListeCommandeTypeTest extends \PHPUnit_Framework_TestCase
	{
		
		public function testGetName()
		{
			$listeCommandeType= new ListeCommandeType();
			$this->assertEquals("roger_plastprodbundle_listecommande",$listeCommandeType->getName());
		}
	}
?>