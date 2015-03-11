<?php

namespace ROGER\PlastProdBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Affectation_MatiereRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AffectationMatiereRepository extends EntityRepository
{
	public function getListeMatiereDansNomenclature()
	{
			$queryBuilder = $this->_em->createQueryBuilder()
													->select('n.nom, m.nom, a.quantite')
													->from($this->_entityName, 'a')
													->join('a.nomenclature','n')
													->join('a.matiere','m')
													->where('n.id = a.nomenclature AND m.id = a.matiere');
			$query = $queryBuilder->getQuery();
			$results  = $query->getResult();
		
		return $results;
	}
}
