<?php

	namespace ROGER\PlastProdBundle\Tests\Entity;
	
	use ROGER\PlastProdBundle\Entity\AffectationMatiereRepository;
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	
	/* classe de tests unitaires sur la classe AffectationMatiereRepository */
	class AffectationMatiereRepositoryTest extends WebTestCase
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
		
		public function testGetListeMatiereDansNomenclature()
		{
			$nomenclature = $this->em->getRepository('ROGERPlastProdBundle:AffectationMatiere')->getListeMatiereDansNomenclature(1);
			$this->assertInternalType("array",$nomenclature);
		}
	}
?>