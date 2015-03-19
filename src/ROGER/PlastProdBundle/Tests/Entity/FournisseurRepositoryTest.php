<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\FournisseurRepository;
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	
	/* classe de tests unitaires sur la classe FournisseurRepository */
	class FournisseurRepositoryTest extends WebTestCase
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
		
		public function testGetAllFournisseurs()
		{
			$nomenclature = $this->em->getRepository('ROGERPlastProdBundle:Fournisseur')->getAllFournisseurs();
			$this->assertInternalType("array",$nomenclature);
		}
	}
?>