<?php
	namespace ROGER\PlastProdBundle\Tests\Form;
	use ROGER\PlastProdBundle\Form\ListeNomenclatureType;
	
	class ListeNomenclatureTypeTest extends \PHPUnit_Framework_TestCase
	{
		
		public function testGetName()
		{
			$listeNomenclatureType= new ListeNomenclatureType();
			$this->assertEquals("roger_plastprodbundle_listenomenclature",$listeNomenclatureType->getName());
		}
	}
?>