<?php

namespace ROGER\PlastProdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock_Pdt_Fini
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ROGER\PlastProdBundle\Entity\StockPdtFiniRepository")
 */
class StockPdtFini
{

	/**
	*
	* @ORM\ManytoOne(targetEntity="ROGER\PlastProdBundle\Entity\Nomenclature",cascade={"persist"})
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
     * @var \DateTime
     *
     * @ORM\Column(name="Date_entree", type="date")
     */
    private $dateEntree;

    /**
     * @var string
     *
     * @ORM\Column(name="Etiquette", type="string",length=255)
     */
    private $etiquette;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Deffectueux", type="boolean")
     */
    private $deffectueux;


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
     * Set dateEntree
     *
     * @param \DateTime $dateEntree
     * @return Stock_Pdt_Fini
     */
    public function setDateEntree($dateEntree)
    {
        $this->dateEntree = $dateEntree;

        return $this;
    }

    /**
     * Get dateEntree
     *
     * @return \DateTime 
     */
    public function getDateEntree()
    {
        return $this->dateEntree;
    }

    /**
     * Set etiquette
     *
     * @param integer $etiquette
     * @return Stock_Pdt_Fini
     */
    public function setEtiquette($etiquette)
    {
        $this->etiquette = $etiquette;

        return $this;
    }

    /**
     * Get etiquette
     *
     * @return integer 
     */
    public function getEtiquette()
    {
        return $this->etiquette;
    }

    /**
     * Set deffectueux
     *
     * @param boolean $deffectueux
     * @return Stock_Pdt_Fini
     */
    public function setDeffectueux($deffectueux)
    {
        $this->deffectueux = $deffectueux;

        return $this;
    }

    /**
     * Get deffectueux
     *
     * @return boolean 
     */
    public function getDeffectueux()
    {
        return $this->deffectueux;
    }

    /**
     * Set nomenclature
     *
     * @param \ROGER\PlastProdBundle\Entity\Nomenclature $nomenclature
     * @return StockPdtFini
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
