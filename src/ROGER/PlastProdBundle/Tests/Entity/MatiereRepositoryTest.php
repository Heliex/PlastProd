<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\MatiereRepository;
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	
	/* classe de tests unitaires sur la classe Matiere */
	class MatiereRepositoryTest extends WebTestCase
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
			
		public function testGetAllMatieres()
		{
			$matiere = $this->em->getRepository('ROGERPlastProdBundle:Matiere')->getAllMatieres();
			$this->assertInternalType("array",$matiere);
		}
	}
?>