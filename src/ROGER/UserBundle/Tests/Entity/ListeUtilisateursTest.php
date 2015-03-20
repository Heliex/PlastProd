<?php

namespace ROGER\UserBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use ROGER\UserBundle\Entity\ListeUtilisateurs;

class ListeUtilisateursTest extends \PHPUnit_Framework_TestCase
{
	public function testSetUtilisateurs()
	{
		$listeUtilisateurs = new ListeUtilisateurs();
		$collect = new ArrayCollection();
		$listeUtilisateurs->setUtilisateurs($collect);
		$this->assertEquals($collect,$listeUtilisateurs->getUtilisateurs());
	}
}

?>