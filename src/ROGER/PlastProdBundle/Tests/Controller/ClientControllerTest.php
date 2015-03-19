<?php

	namespace ROGER\PlastProdBundle\Tests\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	
	class ClientControllerTest extends WebTestCase
	{
		public function testClient()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/Client');
			$this->assertTrue($crawler->filter('html:contains("Client")')->count() >0);
		}
		
		public function testSuivi()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/Client/Suivi');
			$this->assertTrue($crawler->filter('html:contains("<table>")')->count() > 0);
		}
		
		public function testInfos()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/Client/Infos');
			$this->assertTrue($crawler->filter('html:contains("<table>")')->count() > 0);
		}
		
		public function testCommunique()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/Client/Contact');
			$this->assertTrue($crawler->filter('html:contains("Contact")')->count() > 0);
		}
	}
?>