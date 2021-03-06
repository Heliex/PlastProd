<?php

namespace ROGER\PlastProdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affectationcommande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ROGER\PlastProdBundle\Entity\AffectationCommandeRepository")
 */
class AffectationCommande
{
	/**
	* @ORM\ManyToOne(targetEntity="ROGER\PlastProdBundle\Entity\Commande", cascade={"persist"})
	*/
	private $commande;
	
	/**
	* @ORM\ManyToOne(targetEntity="ROGER\PlastProdBundle\Entity\Nomenclature")
	*/
	private $nomenclature;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="Quantite", type="integer")
     */
    private $quantite;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Affectation_commande
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set commande
     *
     * @param \ROGER\PlastProdBundle\Entity\Commande $commande
     * @return AffectationCommande
     */
    public function setCommande(\ROGER\PlastProdBundle\Entity\Commande $commande = null)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \ROGER\PlastProdBundle\Entity\Commande 
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set nomenclature
     *
     * @param \ROGER\PlastProdBundle\Entity\Nomenclature $nomenclature
     * @return AffectationCommande
     */
    public function setNomenclature(\ROGER\PlastProdBundle\Entity\Nomenclature $nomenclature = null)
    {
        $this->nomenclature = $nomenclature;

        return $this;
    }

    /**
     * Get nomenclature
     *
     * @return \ROGER\PlastProdBundle\Entity\Nomenclature 
     */
    public function getNomenclature()
    {
        return $this->nomenclature;
    }
}
