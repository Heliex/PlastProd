<?php

namespace ROGER\PlastProdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Matiere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ROGER\PlastProdBundle\Entity\MatiereRepository")
 */
class Matiere
{
	/**
	* @ var integer
	*
	* @ORM\ManyToOne(targetEntity="ROGER\PlastProdBundle\Entity\Fournisseur")
	*/
	private $fournisseur;
	
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var integer
     * @Assert\Range(min=0,max=99999999999)
	* @Assert\Regex(pattern= "/^\d{1,2147483647}$/", message="On attends un entier positif", match = true)
     * @ORM\Column(name="Quantite_stock", type="integer")
     */
    private $quantiteStock;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix", type="float")
     */
    private $prix;


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
     * @return Matiere
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
     * Set quantiteStock
     *
     * @param integer $quantiteStock
     * @return Matiere
     */
    public function setQuantiteStock($quantiteStock)
    {
        $this->quantiteStock = $quantiteStock;

        return $this;
    }

    /**
     * Get quantiteStock
     *
     * @return integer 
     */
    public function getQuantiteStock()
    {
        return $this->quantiteStock;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Matiere
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }
	
	public function getFournisseur()
	{
		return $this->fournisseur;
	}
	
	public function setFournisseur(Fournisseur $fournisseur)
	{
		$this->fournisseur = $fournisseur;
	}
}
