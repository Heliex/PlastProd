<?php

namespace ROGER\PlastProdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nomenclature
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ROGER\PlastProdBundle\Entity\NomenclatureRepository")
 */
class Nomenclature
{
	
	
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
	* @ORM\Column(name="Affectation_matiere",type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="NONE")
	*/
	private $affectation_matiere;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Chemin_Doc", type="string", length=255)
     */
    private $cheminDoc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Temps_production", type="time")
     */
    private $tempsProduction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Temps_assemblage", type="time")
     */
    private $tempsAssemblage;


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
     * Set nom
     *
     * @param string $nom
     * @return Nomenclature
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set cheminDoc
     *
     * @param string $cheminDoc
     * @return Nomenclature
     */
    public function setCheminDoc($cheminDoc)
    {
        $this->cheminDoc = $cheminDoc;

        return $this;
    }

    /**
     * Get cheminDoc
     *
     * @return string 
     */
    public function getCheminDoc()
    {
        return $this->cheminDoc;
    }

    /**
     * Set tempsProduction
     *
     * @param \DateTime $tempsProduction
     * @return Nomenclature
     */
    public function setTempsProduction($tempsProduction)
    {
        $this->tempsProduction = $tempsProduction;

        return $this;
    }

    /**
     * Get tempsProduction
     *
     * @return \DateTime 
     */
    public function getTempsProduction()
    {
        return $this->tempsProduction;
    }

    /**
     * Set tempsAssemblage
     *
     * @param \DateTime $tempsAssemblage
     * @return Nomenclature
     */
    public function setTempsAssemblage($tempsAssemblage)
    {
        $this->tempsAssemblage = $tempsAssemblage;

        return $this;
    }

    /**
     * Get tempsAssemblage
     *
     * @return \DateTime 
     */
    public function getTempsAssemblage()
    {
        return $this->tempsAssemblage;
    }
}
