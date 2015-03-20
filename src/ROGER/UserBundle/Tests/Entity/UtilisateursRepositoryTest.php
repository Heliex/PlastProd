<?php

	namespace ROGER\UserBundle\Tests\Entity;
	
	use ROGER\UserBundle\Entity\UtilisateursRepository;
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	
	/* classe de tests unitaires sur la classe AffectationMatiereRepository */
	class UtilisateursRepositoryTest extends WebTestCase
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
			$users = $this->em->getRepository('ROGERUserBundle:Utilisateurs')->getAllUsers();
			$this->assertInternalType("array",$users);
		}
	}
?>