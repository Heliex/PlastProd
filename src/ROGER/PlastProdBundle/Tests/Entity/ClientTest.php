<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\Client;
	/* classe de tests unitaires sur la classe Client */
	class ClientTest extends \PHPUnit_Framework_TestCase
	{
		/* test sur la méthode setPrenom */
		public function testSetPrenom()
		{
			$client = new Client();
			$client->setPrenom("fougère");
			$this->assertEquals('fougère',$client->getPrenom());
		}
		
		/* test sur la méthode setNom */
		public function testSetNom()
		{
			$client = new Client();
			$client->setNom('Tryhard');
			$this->assertEquals('Tryhard',$client->getNom());
		}
		
		/* test sur la methode setAdresse */
		public function testSetAdresse()
		{
			$client = new Client();
			$client->setAdresse("18 Rue des bougies");
			$this->assertEquals("18 Rue des bougies",$client->getAdresse());
		}
		
		/* test sur la méthode setNumero */
		public function testSetNumero()
		{
			$client = new Client();
			$client->setNumero("0623457845");
			$this->assertEquals("0623457845",$client->getNumero());
		}
		
		/* test sur la méthode setRepresentant */
		public function testSetRepresentant()
		{
			$client = new Client();
			$client->setRepresentant("MR Guichard");
			$this->assertEquals("MR Guichard",$client->getRepresentant());
		}
		
		/* test sur le méthode setAcces*/
		public function testSetAcces()
		{
			$client = new Client();
			$client->setAcces(true);
			$this->assertEquals(true,$client->getAcces());
		}
		
		/* test sur la méthode getId()*/
		public function testGetId()
		{
			$client = new Client();
			$this->assertEquals(null,$client->getId());
		}
	}
?>