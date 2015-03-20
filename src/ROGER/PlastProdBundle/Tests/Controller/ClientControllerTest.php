<?php

	namespace ROGER\PlastProdBundle\Tests\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	use Symfony\Component\BrowserKit\Cookie;
	use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
	
	class ClientControllerTest extends WebTestCase
	{
		private $client = null;
		
		/* Méthode qui crée le navigateur simulé */
		public function setUp()
		{
			$this->client = static::createClient();
		}
		
		/* Test la méthode clientAction du controller */
		public function testClient()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/PlastProd/Client');
			$this->assertTrue($crawler->filter('html:contains("Client")')->count() >0);
		}
		
		/* Test la méthode suiviAction du controller avec une session non authentifié */
		public function testSuiviNonAuthentifie()
		{
			$client = static::createClient();
			$client->request('GET','/PlastProd/Client/Suivi');
			$this->assertTrue($client->getResponse()->isRedirect());
		}
		
		/* Test la méthode suiviAction du controller avec une session authentifié */
		public function testSuiviAuthentifie()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Client/Suivi');
			$this->assertTrue($this->client->getResponse()->isSuccessful());
		}
		
		/* Test de la méthode suiviAction du controller avec une session authentifié et une soumission de formulaire valide */
		public function testSuiviAuthentifieDonneesValide()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Client/Suivi');
			$form = $crawler->selectButton('Consulter')->form(array('form[nom]' => 'Kielbasa','form[num]' => '456'));
			$crawler = $this->client->submit($form);
			// Si la réponse contient expediée c'est que le formulaire a bien renvoyé une commande.
			$this->assertTrue($crawler->filter('html:contains("Expédiée")')->count() > 0);
		}
		
		/* Test de la méthode suiviAction du controller avec une session authentifié et un formulaire non valide ( Contenant que des espaces blancs) */
		public function testSuiviAuthentifieDonneesInvalideVide()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Client/Suivi');
			$form = $crawler->selectButton('Consulter')->form(array('form[nom]' => '    ','form[num]' => '456'));
			$crawler = $this->client->submit($form);
			// Si la réponse contient "contient" c'est que le formulaire a bien renvoyé une erreur.
			$this->assertTrue($crawler->filter('html:contains("contient")')->count() > 0);
		}
		
		/* Test de la méthode suiviAction du controller avec une session authentifié et un formulaire non valide ( Contenant un bon format de nom mais un mauvais format de numéro) */
		public function testSuiviAuthentifieDonneesInvalideChaineDansNum()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Client/Suivi');
			$form = $crawler->selectButton('Consulter')->form(array('form[nom]' => 'Kielbasa','form[num]' => 'Trololo'));
			$crawler = $this->client->submit($form);
			// Si la réponse contient "entier positif" c'est que le formulaire a bien renvoyé une erreur.
			$this->assertTrue($crawler->filter('html:contains("entier positif")')->count() > 0);
		}
		
		/* Test de la méthode suiviAction du controller avec une session authentifié et un formulaire Valide ( Simulant un client qui essaies de suivre une commande d'un autre client) */
		public function testSuiviAuthentifieDonneesValideMaisNonAttribuee()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Client/Suivi');
			$form = $crawler->selectButton('Consulter')->form(array('form[nom]' => 'Gerard','form[num]' => '456'));
			$crawler = $this->client->submit($form);
			// Si la réponse contient "OU" c'est que le formulaire a bien renvoyé une erreur.
			$this->assertTrue($crawler->filter('html:contains("OU")')->count() > 0);
		}

		/* Test la méthode infosAction du controller */
		public function testInfos()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/PlastProd/Client/Infos');
			$this->assertTrue($crawler->filter('html:contains("Quels")')->count() > 0);
		}
		
		/* Test la méthode communiqueAction du controller */
		public function testCommunique()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/PlastProd/Client/Contact');
			$this->assertTrue($crawler->filter('html:contains("Contact")')->count() > 0);
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