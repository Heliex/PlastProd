<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\NomenclatureRepository;
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	
	/* classe de tests  sur la classe NomenclatureRepository */
	class NomenclatureRepositoryTest extends WebTestCase
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
		
		public function testGetListeNomenclature()
		{
			$nomenclature = $this->em->getRepository('ROGERPlastProdBundle:Nomenclature')->getListeNomenclature();
			$this->assertInternalType("array",$nomenclature);
		}
	}
?>