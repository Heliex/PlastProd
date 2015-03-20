<?php

	namespace ROGER\PlastProdBundle\Tests\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	use Symfony\Component\BrowserKit\Cookie;
	use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
	
	class FournisseursControllerTest extends WebTestCase
	{
		private $client = null;
		
		/* Méthode qui crée le navigateur simulé */
		public function setUp()
		{
			$this->client = static::createClient();
		}
		
		public function testFournisseurs()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Fournisseurs');
			$this->assertTrue($crawler->filter('html:contains("Adresse")')->count() >0);
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