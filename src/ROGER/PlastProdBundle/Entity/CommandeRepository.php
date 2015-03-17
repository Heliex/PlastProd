<?php

namespace ROGER\PlastProdBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CommandeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommandeRepository extends EntityRepository
{
		public function getAllCommandes()
	{
		// Création du query builder
		$queryBuilder = $this->createQueryBuilder('c');
		
		// Récupération de la réquête
		$query = $queryBuilder->getQuery();
		
		// Récupération du résultat de la requête
		$results = $query->getResult();
		
		return $results;
		
	}
	
	// Retourne la derniere commande expédiée
	public function getLastCommandeExpediee()
	{
		$queryBuilder = $this->_em->createQueryBuilder()
													->select('c.numCommande, c.total, c.dateSortie')
													->from($this->_entityName, 'c')
													->orderBy('c.dateSortie','DESC')
													->setMaxResults(1);
		$query = $queryBuilder->getQuery();
		$results  = $query->getResult();
		
		return $results;
	}
	
	// Retourne la deriere commande lancée en prod
	public function getLastCommandeLancee()
	{
			$queryBuilder = $this->_em->createQueryBuilder()
													->select('c.numCommande, c.total, c.dateLancement')
													->from($this->_entityName, 'c')
													->orderBy('c.dateLancement','DESC')
													->setMaxResults(1);
		$query = $queryBuilder->getQuery();
		$results  = $query->getResult();
		
		return $results;
	}
	
	// Retourne le derniere client a avoir commandé 
	public function getNameOfLastCommande()
	{
		$queryBuilder = $this->_em->createQueryBuilder()
													->select('c.numCommande, c.total, c.dateCommande, d.nom, d.prenom')
													->from($this->_entityName, 'c')
													->join('c.client','d')
													->orderBy('c.dateCommande','DESC')
													->setMaxResults(1);
		$query = $queryBuilder->getQuery();
		$results  = $query->getResult();
		
		return $results;
	}
	
	// Retourne le client qui a passé le plus de commande 
	public function getBestClient()
	{
			$queryBuilder = $this->_em->createQueryBuilder()
													->select('count(c) as idcount, d.nom,d.prenom')
													->from($this->_entityName, 'c')
													->join('c.client','d')
													->where('d.id = c.client')
													->groupBy('d.id')
													->orderBy('idcount','DESC')
													->setMaxResults(1);
		$query = $queryBuilder->getQuery();
		$results  = $query->getResult();
		
		return $results;
	}
	
	public function getCommandeNonComplete()
	{
		$queryBuilder = $this->_em->createQueryBuilder()
													->select('c')
													->from($this->_entityName,'c')
													->where('c.estComplet = 0');
		$query = $queryBuilder->getQuery();
		$results = $query->getResult();
		
		return $results;
		
	}
	
	public function getTenLastCommande()
	{
		$queryBuilder = $this->_em->createQueryBuilder()
													->select('c')
													->from($this->_entityName,'c')
													->where('c.estProduite = 0')
													->orderBy('c.dateCommande','DESC')
													->setMaxResults(10);
		$query = $queryBuilder->getQuery();
		$results = $query->getResult();
		
		return $results;
	}
	
	public function getCommande($numCommande,$name)
	{
		
		$queryBuilder = $this->_em->createQueryBuilder()
													->select('c')
													->from($this->_entityName,'c')
													->join('c.client','d')
													->where('c.numCommande = :commande AND d.nom = :nom')
													->setParameter('commande',$numCommande)
													->setParameter('nom',$name);
		
		$query = $queryBuilder->getQuery();
		$results = $query->getResult();
		
		return $results;
	}
}
