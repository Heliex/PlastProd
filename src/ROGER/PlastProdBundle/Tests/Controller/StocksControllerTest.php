<?php

	namespace ROGER\PlastProdBundle\Tests\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	
	class StocksControllerTest extends WebTestCase
	{
		public function testIndex()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/Stocks');
			$this->assertTrue($crawler->filter('html:contains("Stocks")')->count() >0);
		}
		
		public function testMatieres()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/Stocks/MatieresPremieres');
			$this->assertTrue($crawler->filter('html:contains("Modifier")')->count() >0);
		}
		
		public function testNomenclature()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/Stocks/Nomenclature');
			$this->assertTrue($crawler->filter('html:contains("Modifier")')->count() >0);
		}
	}
?>