<?php

/**
*	Controleur de la partie production.
* 	Le controleur agit de cette façon, pour telle action, affiche moi telle vue.
*/

namespace ROGER\PlastProdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductionController extends Controller
{
	// Fonction qui fais le lien entre PlastProd/Production/ Et la vue associée
	public function productionAction()
	{
		$module = "Production";
		return $this->render("ROGERPlastProdBundle:Production:production.html.twig",array('module'=>$module));
	}
	
	// Fonction qui fais le lien entre PlastProd/Production/LancerProd Et la vue associée
	public function lancementAction()
	{
		$module = "Production";
		$repository = $this->getDoctrine()->getManager()->getRepository("ROGERPlastProdBundle:Commande");
		$commande = $repository->getTenLastCommande();
		return $this->render("ROGERPlastProdBundle:Production:lancement.html.twig",array('module'=>$module,"commandes"=>$commande));
	}
	
	// Fonction qui fais le lien entre PlastProd/Production/Etiquettes Et la vue associée
	public function etiquetteAction()
	{
		$module = "Production";
		return $this->render("ROGERPlastProdBundle:Production:etiquette.html.twig",array('module'=>$module));
	}
	
	// Fonction qui fais le lien entre PlastProd/Production/BonAJeter Et la vue associée
	public function jeterAction()
	{
		$module = "Production";
		return $this->render("ROGERPlastProdBundle:Production:produitsDefaillants.html.twig",array('module'=>$module));
	}
	
	public function superviserAction()
	{
		$module = "Production";
		return $this->render("ROGERPlastProdBundle:Production:superviser.html.twig",array('module' => $module));
	}
}
?>