<?php

	namespace ROGER\PlastProdBundle\Tests\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	use Symfony\Component\BrowserKit\Cookie;
	use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
	
	class ConfigControllerTest extends WebTestCase
	{
		private $client = null;
		
		/* Méthode qui crée le navigateur simulé */
		public function setUp()
		{
			$this->client = static::createClient();
		}
		
		public function testIndex()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Config');
			$this->assertTrue($crawler->filter('html:contains("Panneau")')->count() >0);
		}
		
		public function testUtilisateur()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Config/Utilisateur');
			$this->assertTrue($crawler->filter('html:contains("utilisateurs")')->count() >0);
		}
		
		public function testDroits()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Config/Droits');
			$this->assertTrue($crawler->filter('html:contains("utilisateurs")')->count() >0);
		}
		
		public function testAdd()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Config/Utilisateur/Ajout');
			$this->assertTrue($crawler->filter('html:contains("Ajouter")')->count() >0);
		}
		
		public function testModifierUser()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Config/Utilisateur/Modification');
			$this->assertTrue($crawler->filter('html:contains("Modifier")')->count() >0);
		}
		
		public function testDroitsAjout()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Config/Droits/Ajout');
			$this->assertTrue($crawler->filter('html:contains("Valider")')->count() >0);
		}
		
		public function testDroitsSuppress()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Config/Droits/Suppression');
			$this->assertTrue($crawler->filter('html:contains("Valider")')->count() >0);
		}
		
			/* Méthode qui repucere le navigateur et qui crée une session authentifié */
		private function logIn()
		{
			$session = $this->client->getContainer()->get('session');
			
			$firewall = 'main';
			$token = new UsernamePasswordToken('admin',null,$firewall,array('ROLE_ADMIN'));
			$session->set('_security_' . $firewall, serialize($token));
			$session->save();
			
			$cookie = new Cookie($session->getName(),$session->getId());
			$this->client->getCookieJar()->set($cookie);
		}
		
	}
?>