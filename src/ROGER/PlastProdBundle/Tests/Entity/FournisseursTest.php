<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\Fournisseur;
	
	class FournisseursTest extends \PHPUnit_Framework_TestCase
	{
		/* Méthode de test sur getId */
		public function testGetId()
		{
			$fournisseur = new Fournisseur();
			$this->assertEquals(null,$fournisseur->getId());
		}
		
		/* Méthode de test sur getNom */
		public function testSetNom()
		{
			$fournisseur = new Fournisseur();
			$fournisseur->setNom("RidiColor");
			$this->assertEquals("RidiColor",$fournisseur->getNom());
		}
		
		/* Méthode de test sur getAdresse */
		public function testSetAdresse()
		{
			$fournisseur = new Fournisseur();
			$fournisseur->setAdresse("110 Rue des Arcs en Ciels");
			$this->assertEquals("110 Rue des Arcs en Ciels",$fournisseur->getAdresse());
		}
		
		/* Méthode de test sur getNumero */
		public function testSetNumero()
		{
			$fournisseur = new Fournisseur();
			$fournisseur->setNumero("0623696969");
			$this->assertEquals("0623696969",$fournisseur->getNumero());
		}
		
		/* Méthode de test sur getRepresentant */
		public function testSetRepresentant()
		{
			$fournisseur = new Fournisseur();
			$fournisseur->setRepresentant("Mr Couleur");
			$this->assertEquals("Mr Couleur",$fournisseur->getRepresentant());
		}
	}
?>