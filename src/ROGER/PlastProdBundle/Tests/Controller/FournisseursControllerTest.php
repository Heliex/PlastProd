<?php

	namespace ROGER\PlastProdBundle\Tests\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	
	class FournisseursControllerTest extends WebTestCase
	{
		public function testFournisseurs()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/Fournisseurs');
			$this->assertTrue($crawler->filter('html:contains("Adresse")')->count() >0);
		}
	}
?>