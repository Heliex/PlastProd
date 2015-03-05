<?php

namespace ROGER\UserBundle\Entity ;

use Doctrine\ORM\EntityRepository;

/**
 * UtilisateursRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */

/*test*/
class UtilisateursRepository extends EntityRepository
{
	public function getAllUsers()
	{
		// Création du query builder
		$queryBuilder = $this->createQueryBuilder('u');
		
		// Récupération de la réquête
		$query = $queryBuilder->getQuery();
		
		// Récupération du résultat de la requête
		$results = $query->getResult();
		
		return $results;
		
	}
}
?>