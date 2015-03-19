<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\ListeNomenclature;
	use Doctrine\Common\Collections\ArrayCollection;
	
	/* Classe de teste sur la classe ListeNomenclature */
	class ListeNomenclatureTest extends \PHPUnit_Framework_TestCase
	{	
		/* test de la méthode setNomenclature */
		public function testSetNomenclature()
		{
			$listeNomenclature = new ListeNomenclature();
			$listeNomenclature->setNomenclature(new ArrayCollection());
			$this->assertEquals(new ArrayCollection(),$listeNomenclature->getNomenclature());
		}
	}
?>