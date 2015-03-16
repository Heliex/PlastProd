<?php

/**
*	Controleur qui gère toutes les vues pour le module Client.
*    Le controleur agit de cette façon, pour telle action, affiche moi telle vue.
*/

namespace ROGER\PlastProdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ROGER\PlastProdBundle\Entity\Commande;

class ClientController extends Controller
{
	// Vue quand on clique sur le module Client.
	public function clientAction()
	{
		$module = "Client";
		return $this->render('ROGERPlastProdBundle:Client:client.html.twig', array('module'=>$module));
	}
	
	// Vue Suvi pour le client
	public function suiviAction(Request $request)
	{
		// Je crée le formulaire pour que le client renseignes la commande qu'il veux suivre.
		$module = "Client - Suivi";
		$formBuilder = $this->get('form.factory')->createBuilder('form');
		$formBuilder->add('num','text');
		$formBuilder->add('consulter','submit');
		$form = $formBuilder->getForm();
		
		// Quand je valide le formulaire
		if($form->handleRequest($request)->isValid())
		{
				// JE le recupere
				$formulaire = $this->getRequest()->request->get('form');
				$numCommande = $formulaire['num']; // Puis je recupere le numéro de commande 
				$repository=$this->getDoctrine()->getManager()->getRepository('ROGERPlastProdBundle:Commande');
				$commande = $repository->findByNumCommande($numCommande);	// Avec ça je tape la BDD et je récupère la commande 
			return $this->render('ROGERPlastProdBundle:Client:suivi.html.twig',array('module' => $module, 'commande' => $commande)); // Que je renvoi dans la vue
		}
		return $this->render("ROGERPlastProdBundle:Client:suivi.html.twig",array('module'=>$module, 'form' => $form->createView()));
	}
	
	// Vue pour les infos entreprise
	public function infosAction()
	{
		$module = "Client - Infos";
		return $this->render("ROGERPlastProdBundle:Client:infos.html.twig",array('module'=>$module));
	}
	
	// Vue pour communiquez avec l'entreprise
	public function communiqueAction()
	{
		$module = "Client - Communiquer";
		$formBuilder = $this->get('form.factory')->createBuilder('form');
		$formBuilder->add('titre','text');
		$formBuilder->add('auteur','text');
		$formBuilder->add('contenu','textarea');
		$formBuilder->add('Envoyer','submit');
		$form = $formBuilder->getForm();
		return $this->render("ROGERPlastProdBundle:Client:communique.html.twig",array('module'=>$module,'form' => $form->createView()));
	}
}
?>