<?php
	namespace ROGER\PlastProdBundle\Tests\Form;
	use ROGER\PlastProdBundle\Form\CommandeType;
	
	class CommandeTypeTest extends \PHPUnit_Framework_TestCase
	{
		
		public function testGetName()
		{
			$commandeType= new CommandeType();
			$this->assertEquals("roger_plastprodbundle_commande",$commandeType->getName());
		}
	}
?>