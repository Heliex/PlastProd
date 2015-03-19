<?php

	namespace ROGER\PlastProdBundle\Tests\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	use Symfony\Component\BrowserKit\Cookie;
	use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
	
	class ClientControllerTest extends WebTestCase
	{
		private $client = null;
		
		public function setUp()
		{
			$this->client = static::createClient();
		}
		
		public function testClient()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/PlastProd/Client');
			$this->assertTrue($crawler->filter('html:contains("Client")')->count() >0);
		}
		
		public function testSuiviNonAuthentifie()
		{
			$client = static::createClient();
			$client->request('GET','/PlastProd/Client/Suivi');
			$this->assertTrue($client->getResponse()->isRedirect());
		}
		
		public function testSuiviAuthentifie()
		{
			$this->logIn();
			$crawler = $this->client->request('GET','/PlastProd/Client/Suivi');
			$this->assertTrue($this->client->getResponse()->isSuccessful());
		}
		
		public function testInfos()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/PlastProd/Client/Infos');
			$this->assertTrue($crawler->filter('html:contains("Quels")')->count() > 0);
		}
		
		public function testCommunique()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/PlastProd/Client/Contact');
			$this->assertTrue($crawler->filter('html:contains("Contact")')->count() > 0);
		}
		
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