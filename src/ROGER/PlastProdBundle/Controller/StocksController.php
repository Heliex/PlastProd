<?php

/**
*	Controleur de la partie stocks.
* 	Le controleur agit de cette façon, pour telle action, affiche moi telle vue.
*/

namespace ROGER\PlastProdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StocksController extends Controller
{
	// Methode qui fais le lien entre PlastProd/Stocks/ Et la vue associée
	public function indexAction()
	{
		$module = "Stocks";
		return $this->render("ROGERPlastProdBundle:Stocks:stocks.html.twig",array('module'=>$module));
	}

	public function stockageAction()
	{
		$module = "Stocks";
		return $this->render("ROGERPlastProdBundle:Stocks:stockage.html.twig",array('module'=>$module));
	}
	
	public function expeditionAction()
	{
		$module = "Stocks";
		return $this->render("ROGERPlastProdBundle:Stocks:expedition.html.twig",array('module'=>$module));
	}
	
	public function matieresAction()
	{
		$module = "Stocks";
		return $this->render("ROGERPlastProdBundle:Stocks:matieres.html.twig",array('module'=>$module));
	}
	
	public function inventaireAction()
	{
		$module = "Stocks";
		return $this->render("ROGERPlastProdBundle:Stocks:inventaire.html.twig",array('module'=>$module));
	}
	
	public function nomenclatureAction()
	{
		$module = "Stocks";
		return $this->render("ROGERPlastProdBundle:Stocks:nomenclature.html.twig",array('module'=>$module));
	}
	
	public function gestionMPAction()
	{
		$module = "Stocks";
		return $this->render("ROGERPlastProdBundle:Stocks:gestionMatieresPremieres.html.twig",array('module'=>$module));
	}
	
}
?>