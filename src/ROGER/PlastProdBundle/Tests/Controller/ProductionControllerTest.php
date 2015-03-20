<?php

	namespace ROGER\PlastProdBundle\Tests\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	use Symfony\Component\BrowserKit\Cookie;
	use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
	
	class ProductionControllerTest extends WebTestCase
	{
		private $client = null;
		
		/* Méthode qui crée le navigateur simulé */
		public function setUp()
		{
			$this->client = static::createClient();
		}
		
		public function testProduction()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Production');
			$this->assertTrue($crawler->filter('html:contains("Production")')->count() >0);
		}
		
		public function testLancement()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Production/LancerProd');
			$this->assertTrue($crawler->filter('html:contains("Date de la commande")')->count() >0);
		}
		
		public function testLancementSoumissionFormulaire()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Production/LancerProd');
			$form = $crawler->selectButton('Valider')->form();
			$this->client->submit($form);
			$crawler = $this->client->followRedirect();
			$this->assertTrue($crawler->filter('html:contains("Toutes les commandes")')->count() >0);
		}
		
		public function testSuperviser()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Production/Superviser');
			$this->assertTrue($crawler->filter('html:contains("Produit déffectueux")')->count() >0);
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