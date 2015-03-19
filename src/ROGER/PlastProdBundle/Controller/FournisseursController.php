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
		$repository = $this->getDoctrine()->getManager()->getRepository("ROGERPlastProdBundle:Fournisseur");
		
		// On récupère la liste des fournisseurs
		$listeFournisseurs = $repository->getAllFournisseurs();
		
		return $this->render("ROGERPlastProdBundle:Fournisseurs:fournisseurs.html.twig",array('module'=>$module,'fournisseurs' => $listeFournisseurs));
	}
}
?>