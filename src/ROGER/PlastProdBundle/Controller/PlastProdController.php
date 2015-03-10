<?php

/**
* 	Controleur qui gére toutes la partie accueil sans être authentifié.
*	Le controleur agit de cette façon, pour telle action, affiche moi telle vue.
*/

namespace ROGER\PlastProdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ROGERPlastProdBundle\Entity\Commande;


class PlastProdController extends Controller
{
    public function indexAction()
    {
		$module = "Aucun";
        return $this->render('ROGERPlastProdBundle:PlastProd:index.html.twig', array('module' => $module));
    }
	
	// Action qui renvoie le vue du formulaire quand quelqu'un veux se connecter
	public function connexionAction(Request $request)
	{	
		$user =$this->getUser();
		if(!null == $user)
		{
			$user = $user->getUsername();
		}
		else
		{
			
		}
		return $this->render('ROGERPlastProdBundle:PlastProd:userInfo.html.twig',array("user" => $user));
	}
	
	public function carousselAction(Request $request)
	{
		$repository = $this->getDoctrine()->getManager()->getRepository("ROGERPlastProdBundle:Commande");
		
		// Récupere la derniere commande expediée
		$commandeE = $repository->getLastCommandeExpediee();
		
		// Récupère la derniere commande lancée
		$commandeL = $repository->getLastCommandeLancee();
		
		// Récupère le dernier client a avoir passé commande
		$client = $repository->getNameOfLastCommande();
		
		$bestClient = $repository->getBestClient(); 
		
		return $this->render('ROGERPlastProdBundle:PlastProd:caroussel.html.twig',array('commandeE' => $commandeE,'commandeL' => $commandeL,'client' => $client , "bestClient" => $bestClient));
	}
}
?>