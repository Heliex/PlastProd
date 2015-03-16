<?php

namespace ROGER\UserBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

class ListeUtilisateurs
{
	private $utilisateurs;
	
	public function getUtilisateurs()
	{
		return $this->utilisateurs;
	}
	
	public function setUtilisateurs(ArrayCollection $users)
	{
		$this->utilisateurs = $users;
	}
	
	public function __construct()
	{
		$this->utilisateurs = new ArrayCollection();
	}
}

?>