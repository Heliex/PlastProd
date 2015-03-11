<?php

namespace ROGER\PlastProdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affectation_commande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ROGER\PlastProdBundle\Entity\AffectationcommandeRepository")
 */
class AffectationCommande
{
	/**
	* @ORM\OneToOne(targetEntity="ROGER\PlastProdBundle\Entity\Commande", cascade={"persist"})
	*/
	private $commande;
	
	/**
	* @ORM\OneToOne(targetEntity="ROGER\PlastProdBundle\Entity\Client", cascade={"persist"})
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
}
