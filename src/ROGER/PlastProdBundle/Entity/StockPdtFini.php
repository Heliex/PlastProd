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
	* @ORM\OneToOne(targetEntity="ROGER\PlastProdBundle\Entity\Nomenclature")
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
     * @var integer
     *
     * @ORM\Column(name="Etiquette", type="integer")
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
}
