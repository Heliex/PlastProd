<?php

	namespace ROGER\PlastProdBundle\Tests\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	use Symfony\Component\BrowserKit\Cookie;
	use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
	
	class StocksControllerTest extends WebTestCase
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
			$crawler = $this->client->request('GET','/PlastProd/Stocks');
			$this->assertTrue($crawler->filter('html:contains("Stocks")')->count() >0);
		}
		
		public function testMatieres()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Stocks/MatieresPremieres');
			$this->assertTrue($crawler->filter('html:contains("Modifier")')->count() >0);
		}
		
		public function testSoumissionFormulaireDonneesValide()
		{
			$this->logIn();
			$crawler = $crawler = $this->client->request('GET','/PlastProd/Stocks/MatieresPremieres');
			$form = $crawler->selectButton('Modifier')->form();
			$this->client->submit($form);
			$crawler = $this->client->followRedirect();
			$this->assertTrue($crawler->filter('html:contains("Les modifications")')->count() >0);
		}
		
		public function testSoumissionFormulaireDonneesInvalide()
		{
			$this->logIn();
			$crawler = $crawler = $this->client->request('GET','/PlastProd/Stocks/MatieresPremieres');
			$form = $crawler->selectButton('Modifier')->form(array('roger_plastprodbundle_listematiere[matiere][0][nom]' => 'Tuyaux pvc', 'roger_plastprodbundle_listematiere[matiere][0][quantiteStock]' => 'azer' ));
			$crawler = $this->client->submit($form);
			$this->assertTrue($crawler->filter('html:contains("Vous avez")')->count() >0);
		}
		
		public function testNomenclature()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Stocks/Nomenclature');
			$this->assertTrue($crawler->filter('html:contains("Modifier")')->count() >0);
		}
		
		public function testNomenclatureSoumissionFormulaireDonnees()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Stocks/Nomenclature');
			$form = $crawler->selectButton('Modifier')->form(array());
			$this->client->submit($form);
			$crawler = $this->client->followRedirect();
			$this->assertTrue($crawler->filter('html:contains("Les modifications des nomenclatures")')->count() > 0);
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