<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\Commande;
	use ROGER\PlastProdBundle\Entity\Client;
	
	class CommandeTest extends \PHPUnit_Framework_TestCase
	{
		/* test sur la méthode setClien() */
		public function testSetClient()
		{
			$commande = new Commande();
			$commande->setClient(new Client());
			$this->assertEquals(new Client(),$commande->getClient());
		}
		
		/* test sur la méthode getId */
		public function testGetId()
		{
			$commande = new Commande();
			$this->assertEquals(null,$commande->getId());
		}
		
		/* test sur la méthode setNumCommande */
		public function testSetNumCommande()
		{
			$commande = new Commande();
			$commande->setNumCommande("12345678");
			$this->assertEquals("12345678",$commande->getNumCommande());
		}
		
		/* test sur la méthode setDateSortie */
		public function testSetDateSortie()
		{
			$commande = new Commande();
			$commande->setDateSortie(new \DateTime());
			$this->assertEquals(new \DateTime(),$commande->getDateSortie());
		}
		
		/* test sur la méthode setDateDateLancement */
		public function testSetDateLancement()
		{
			$commande = new Commande();
			$commande->setDateLancement(new \DateTime());
			$this->assertEquals(new \DateTime(),$commande->getDateLancement());
		}
		
		/* test sur la méthode setDateCommande */
		public function testSetDateCommande()
		{
			$commande = new Commande();
			$commande->setDateCommande(new \DateTime());
			$this->assertEquals(new \DateTime(),$commande->getDateCommande());
		}
		
		/* test sur la méthode setTotal */
		public function testSetTotal()
		{
			$commande = new Commande();
			$commande->setTotal(250.80);
			$this->assertEquals(250.80,$commande->getTotal());
		}
		
		/* test sur la méthode estComplet */
		public function testEstComplet()
		{
			$commande = new Commande();
			$commande->setEstComplet(false);
			$this->assertEquals(false,$commande->getEstComplet());
		}
		
		/* test sur la méthode estProduite */
		public function testEstProduite()
		{
			$commande = new Commande();
			$commande->setEstProduite(true);
			$this->assertEquals(true,$commande->getEstProduite());
		}
		
		/* test sur la méthode est Expediee */
		public function testEstExpediee()
		{
			$commande = new Commande();
			$commande->setEstExpediee(true);
			$this->assertEquals(true,$commande->getEstExpediee());
		}
		
	}
?>