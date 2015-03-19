<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\CommandeRepository;
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	
	/* classe de tests unitaires sur la classe Matiere */
	class CommandeRepositoryTest extends WebTestCase
	{
		/**
		* @var \Doctrine\ORM\EntityManager
		*/
		private $em;
		
		public function setUp()
		{
			static::$kernel = static::createKernel();
			static::$kernel->boot();
			$this->em = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');
		}
		
		/* Test de la méthode getAllCommandes */
		public function testGetAllCommandes()
		{
			$matiere = $this->em->getRepository('ROGERPlastProdBundle:Commande')->getAllCommandes();
			$this->assertInternalType("array",$matiere);
		}
		
		/* Test de la méthode getLastCommandeExpediee */
		public function testGetLastCommandeExpediee()
		{
			$matiere = $this->em->getRepository('ROGERPlastProdBundle:Commande')->getLastCommandeExpediee();
			$this->assertCount(1,$matiere);
		}
		
		/* Test de la méthode getLastCommandeLancee */
		public function testGetLastCommandeLancee()
		{
			$matiere = $this->em->getRepository('ROGERPlastProdBundle:Commande')->getLastCommandeLancee();
			$this->assertCount(1,$matiere);
		}
		
		/* Test de la méthode getNameOfLastCommande */
		public function testGetNameOfLastCommande()
		{
			$matiere = $this->em->getRepository('ROGERPlastProdBundle:Commande')->getNameOfLastCommande();
			$this->assertCount(1,$matiere);
		}
		
		/* Test de la méthode getBestClient */
		public function testGetBestClient()
		{
			$matiere = $this->em->getRepository('ROGERPlastProdBundle:Commande')->getBestClient();
			$this->assertCount(1,$matiere);
		}
		
		/* Test de la méthode getCommandeNonComplete */
		public function testGetCommandeNonComplete()
		{
			$matiere = $this->em->getRepository('ROGERPlastProdBundle:Commande')->getCommandeNonComplete();
			$this->assertInternalType("array",$matiere);
		}
		
		/* Test de la méthode getCommandeNonComplete */
		public function testGetTenLastCommande()
		{
			$matiere = $this->em->getRepository('ROGERPlastProdBundle:Commande')->getTenLastCommande();
			$this->assertInternalType("array",$matiere);
		}
		
		/* Test de la méthode getCommande */
		/* Ce test suppose que dans la base est enregistré un client qui à pour nom Kielbasa et 456 comme numéro de commande */
		
		public function testGetCommande()
		{
			$matiere = $this->em->getRepository('ROGERPlastProdBundle:Commande')->getCommande("456","Kielbasa");
			$this->assertCount(1,$matiere);
		}
	}
?>