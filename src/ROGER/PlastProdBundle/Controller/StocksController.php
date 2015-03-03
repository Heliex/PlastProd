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
	// Fonction qui fais le lien entre PlastProd/Stocks/ Et la vue associée
	public function stocksAction()
	{
		$module = "Stocks";
		return $this->render("ROGERPlastProdBundle:Stocks:stocks.html.twig",array('module'=>$module));
	}
	
	// Fonction qui fais le lien entre PlastProd/Stocks/LancerProd Et la vue associée
	public function lancementAction()
	{
		$module = "Stocks";
		return $this->render("ROGERPlastProdBundle:Stocks:lancement.html.twig",array('module'=>$module));
	}
	
	// Fonction qui fais le lien entre PlastProd/Stocks/Etiquettes Et la vue associée
	public function etiquetteAction()
	{
		$module = "Stocks";
		return $this->render("ROGERPlastProdBundle:Stocks:etiquette.html.twig",array('module'=>$module));
	}
	
	// Fonction qui fais le lien entre PlastProd/Stocks/BonAJeter Et la vue associée
	public function jeterAction()
	{
		$module = "Stocks";
		return $this->render("ROGERPlastProdBundle:Stocks:produitsDefaillants.html.twig",array('module'=>$module));
	}
}
?>