<?php

	namespace ROGER\PlastProdBundle\Tests\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	
	class PlastProdControllerTest extends WebTestCase
	{
		public function testIndex()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/');
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
			$crawler = $client->request('GET','/');
			$this->assertTrue($crawler->filter('html:contains("commandé")')->count() >0);
		}
	}
?>