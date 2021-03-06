<?php

namespace ROGER\PlastProdBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * AffectationCommandeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AffectationCommandeRepository extends EntityRepository
{
	public function getNomenclatureByNumCommande($num)
	{
		$queryBuilder = $this->_em->createQueryBuilder()
													->select('n.nom,n.id')
													->from($this->_entityName, 'a')
													->join('a.commande','c')
													->join('a.nomenclature','n')
													->where('a.nomenclature = n.id AND c.numCommande=:num')
													->setParameter('num',$num);
													
		$query = $queryBuilder->getQuery();
		$results  = $query->getResult();
		
		return $results;
	}
}
