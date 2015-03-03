<?php

/**
*	Controleur de la partie fournisseurs.
* 	Le controleur agit de cette façon, pour telle action, affiche moi telle vue.
*/

namespace ROGER\PlastProdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FournisseursController extends Controller
{
	// Fonction qui fais le lien entre PlastProd/Fournisseurs/ Et la vue associée
	public function fournisseursAction()
	{
		$module = "Fournisseurs";
		return $this->render("ROGERPlastProdBundle:Fournisseurs:fournisseurs.html.twig",array('module'=>$module));
	}
	
	// Fonction qui fais le lien entre PlastProd/fournisseurs/LancerProd Et la vue associée
	public function lancementAction()
	{
		$module = "Fournisseurs";
		return $this->render("ROGERPlastProdBundle:fournisseurs:lancement.html.twig",array('module'=>$module));
	}
	
	// Fonction qui fais le lien entre PlastProd/fourn/Etiquettes Et la vue associée
	public function etiquetteAction()
	{
		$module = "Fournisseurs";
		return $this->render("ROGERPlastProdBundle:fournisseurs:etiquette.html.twig",array('module'=>$module));
	}
	
	// Fonction qui fais le lien entre PlastProd/fourn/BonAJeter Et la vue associée
	public function jeterAction()
	{
		$module = "Fournisseurs";
		return $this->render("ROGERPlastProdBundle:Fournisseurs:produitsDefaillants.html.twig",array('module'=>$module));
	}
}
?>