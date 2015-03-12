<?php

namespace ROGER\PlastProdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffectationMatiere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ROGER\PlastProdBundle\Entity\AffectationMatiereRepository")
 */
class AffectationMatiere
{
	
	/**
	* @ORM\ManyToOne(targetEntity="ROGER\PlastProdBundle\Entity\Nomenclature", cascade={"persist"})
	*/
	private $nomenclature;
	
	/**
	* @ORM\ManyToOne(targetEntity="ROGER\PlastProdBundle\Entity\Matiere", cascade={"persist"})
	*/
	private $matiere;
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
     * @return Affectation_Matiere
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
     * Set nomenclature
     *
     * @param \ROGER\PlastProdBundle\Entity\Nomenclature $nomenclature
     * @return AffectationMatiere
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

    /**
     * Set matiere
     *
     * @param \ROGER\PlastProdBundle\Entity\Matiere $matiere
     * @return AffectationMatiere
     */
    public function setMatiere(\ROGER\PlastProdBundle\Entity\Matiere $matiere = null)
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * Get matiere
     *
     * @return \ROGER\PlastProdBundle\Entity\Matiere 
     */
    public function getMatiere()
    {
        return $this->matiere;
    }
}
