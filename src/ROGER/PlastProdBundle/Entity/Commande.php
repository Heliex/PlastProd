<?php

namespace ROGER\PlastProdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ROGER\PlastProdBundle\Entity\CommandeRepository")
 */
class Commande
{
	/**
	* @ORM\OneToOne(targetEntity="ROGER\PlastProdBundle\Entity\Client", cascade={"persist"})
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
	*
	* @ORM\Column(name="numCommande", type="integer")
	*/
	private $numCommande;
	
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_commande", type="date")
     */
    private $dateCommande;

    /**
     * @var float
     *
     * @ORM\Column(name="Total", type="float")
     */
    private $total;

	/**
	* @var integer
	* 
	* @ORM\Column(name="estComplet", type ="boolean")
	*/
	private $estComplet;
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
}
