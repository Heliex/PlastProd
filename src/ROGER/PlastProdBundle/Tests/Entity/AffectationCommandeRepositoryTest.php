<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\AffectationCommandeRepository;
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	
	/* classe de tests  sur la classe AffectationCommandeRepository */
	class AffectationCommandeRepositoryTest extends WebTestCase
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
		
		public function testGetNomenclatureByNumCommande()
		{
			$nomenclature = $this->em->getRepository('ROGERPlastProdBundle:AffectationCommande')->getNomenclatureByNumCommande(45656456);
			$this->assertCount(1,$nomenclature);
		}
	}
?>