<?php

	namespace ROGER\PlastProdBundle\Tests\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
	
	class ConfigControllerTest extends WebTestCase
	{
		public function testIndex()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/Config');
			$this->assertTrue($crawler->filter('html:contains("Panneau")')->count() >0);
		}
		
		public function testUtilisateur()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/Config/Utilisateur');
			$this->assertTrue($crawler->filter('html:contains("utilisateurs")')->count() >0);
		}
		
		public function testDroits()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/Config/Droits');
			$this->assertTrue($crawler->filter('html:contains("utilisateurs")')->count() >0);
		}
		
		public function testAdd()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/Config/Utilisateur/Ajout');
			$this->assertTrue($crawler->filter('html:contains("Ajouter")')->count() >0);
		}
		
		public function testModifierUser()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/Config/Utilisateur/Modification');
			$this->assertTrue($crawler->filter('html:contains("Modifier")')->count() >0);
		}
		
		public function testDroitsAjout()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/Config/Droits/Ajout');
			$this->assertTrue($crawler->filter('html:contains("Valider")')->count() >0);
		}
		
		public function testDroitsSuppress()
		{
			$client = static::createClient();
			$crawler = $client->request('GET','/Config/Droits/Suppression');
			$this->assertTrue($crawler->filter('html:contains("Valider")')->count() >0);
		}
		
	}
?>