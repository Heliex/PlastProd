<?php

	namespace ROGER\PlastProdBundle\Tests\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	use Symfony\Component\BrowserKit\Cookie;
	use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
	
	class PlastProdControllerTest extends WebTestCase
	{
		
		private $client = null;
		
		/* Méthode qui crée le navigateur simulé */
		public function setUp()
		{
			$this->client = static::createClient();
		}
		
		public function testIndex()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/PlastProd/');
			$this->assertTrue($crawler->filter('html:contains("Accueil")')->count() >0);
		}
		
		public function testConnexion()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','../login');
			$this->assertTrue($crawler->filter('html:contains("Connexion")')->count() >0);
		}
		
		public function testCaroussel()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/PlastProd/');
			$this->assertTrue($crawler->filter('html:contains("commandé")')->count() >0);
		}
		
		/* Méthode qui repucere le navigateur et qui crée une session authentifié */
		private function logIn()
		{
			$session = $this->client->getContainer()->get('session');
			
			$firewall = 'main';
			$token = new UsernamePasswordToken('Chris8888',null,$firewall,array('ROLE_ADMIN'));
			$session->set('_security_' . $firewall, serialize($token));
			$session->save();
			
			$cookie = new Cookie($session->getName(),$session->getId());
			$this->client->getCookieJar()->set($cookie);
		}
	}
?>