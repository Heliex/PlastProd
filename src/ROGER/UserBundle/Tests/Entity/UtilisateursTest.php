<?php 

	namespace ROGER\UserBundle\Tests\Entity;
	
	use ROGER\UserBundle\Entity\Utilisateurs;
	
	class UtilisateursTests extends \PHPUnit_Framework_TestCase
	{
		/* Test sur la méthode setUsername */
		public function testSetUsername()
		{
			$user = new Utilisateurs();
			$user->setUsername('Fougeres');
			$this->assertEquals('Fougeres',$user->getUsername());
		}
	}
?>