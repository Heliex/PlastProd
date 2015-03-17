<?php

namespace ROGER\PlastProdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Commande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ROGER\PlastProdBundle\Entity\CommandeRepository")
 */
class Commande
{
	/**
	* @ORM\ManyToOne(targetEntity="ROGER\PlastProdBundle\Entity\Client", cascade={"persist"})
	*/
	private $client;
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
	* @Assert\NotBlank(message="Vous devez taper un nombre")
	* @Assert\Range(min=0,max = 2147483647)
	* @Assert\Regex(pattern= "/^\d{1,2147483647}$/", message="On attends un entier positif", match = true)
	* @ORM\Column(name="numCommande", type="integer")
	* 
	*/
	private $numCommande;
	
	/**
	* @var \DateTime
	* @Assert\DateTime()
	* @ORM\Column(name="Date_sortie", type="date")
	*/
	private $dateSortie;
	
	/**
	* @var \DateTime
	* @Assert\DateTime()
	* @ORM\Column(name="Date_Lancement",type="date")
	*/
	private $dateLancement;
	
    /**
     * @var \DateTime
     * @Assert\DateTime()
     * @ORM\Column(name="Date_commande", type="date")
     */
    private $dateCommande;

    /**
     * @var float
     * @Assert\Range(min = 0, max = 999999999999.99)
     * @ORM\Column(name="Total", type="float")
     */
    private $total;

	/**
	* @var integer
	* @Assert\Range(min=0, max =1)
	* @ORM\Column(name="estComplet", type ="boolean")
	*/
	private $estComplet;
	
	/**
	* @var integer
	* @Assert\Range(min=0, max=1)
	* @ORM\Column(name="estProduite", type ="boolean")
	*/
	private $estProduite;
	
	/**
	* @var integer
	* @Assert\Range(min=0, max = 1)
	* @ORM\Column(name="estExpediee", type ="boolean")
	*/
	private $estExpediee;
	
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
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     * @return Commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime 
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set total
     *
     * @param float $total
     * @return Commande
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float 
     */
    public function getTotal()
    {
        return $this->total;
    }
	
	public function getNumCommande()
	{
		return $this->numCommande;
	}
	
	public function setNumCommande($num)
	{
		$this->numCommande = $num;
		return $this;
	}
	
	public function getClient()
	{
		return $this->client;
	}
	
	public function setClient(Client $client)
	{
		$this->client = $client;
	}
	
	public function getEstComplet()
	{
		return $this->estComplet;
	}
	
	public function setEstComplet($complet)
	{
		$this->estComplet = $complet;
	}

    /**
     * Set dateSortie
     *
     * @param \DateTime $dateSortie
     * @return Commande
     */
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    /**
     * Get dateSortie
     *
     * @return \DateTime 
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    /**
     * Set dateLancement
     *
     * @param \DateTime $dateLancement
     * @return Commande
     */
    public function setDateLancement($dateLancement)
    {
        $this->dateLancement = $dateLancement;

        return $this;
    }

    /**
     * Get dateLancement
     *
     * @return \DateTime 
     */
    public function getDateLancement()
    {
        return $this->dateLancement;
    }

    /**
     * Set estExpediee
     *
     * @param boolean $estExpediee
     * @return Commande
     */
    public function setEstExpediee($estExpediee)
    {
        $this->estExpediee = $estExpediee;

        return $this;
    }

    /**
     * Get estExpediee
     *
     * @return boolean 
     */
    public function getEstExpediee()
    {
        return $this->estExpediee;
    }

    /**
     * Set estProduite
     *
     * @param boolean $estProduite
     * @return Commande
     */
    public function setEstProduite($estProduite)
    {
        $this->estProduite = $estProduite;

        return $this;
    }

    /**
     * Get estProduite
     *
     * @return boolean 
     */
    public function getEstProduite()
    {
        return $this->estProduite;
    }
}
