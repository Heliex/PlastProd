<?php

	namespace ROGER\PlastProdBundle\Tests\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	
	class ProductionControllerTest extends WebTestCase
	{
		public function testProduction()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/Production');
			$this->assertTrue($crawler->filter('html:contains("Production")')->count() >0);
		}
		
		public function testLancement()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','Production/LancerProd');
			$this->assertTrue($crawler->filter('html:contains("Valider")')->count() >0);
		}
		
		public function testSuperviser()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/Production/Superviser');
			$this->assertTrue($crawler->filter('html:contains("Valider")')->count() >0);
		}
	}
?>