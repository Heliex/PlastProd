<?php

/**
*	Controleur qui gère toutes les vues pour le module Client.
*    Le controleur agit de cette façon, pour telle action, affiche moi telle vue.
*/

namespace ROGER\PlastProdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ROGER\PlastProdBundle\Entity\Commande;
use Symfony\Component\HttpFoundation\Response;

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
		$formBuilder->add('nom','text');
		$formBuilder->add('num','text');
		$formBuilder->add('consulter','submit'); 
		$form = $formBuilder->getForm();
		
		// Quand je valide le formulaire et si les données sont valides
		if($form->handleRequest($request)->isValid())
		{
				// JE le recupere
				$formulaire = $this->getRequest()->request->get('form');
				$numCommande = $formulaire['num']; // Puis je recupere le numéro de commande 
				$name = $formulaire['nom'];
				
				// Si la saise est comprise entre 1 et 99999999999 et si le nom est une chaine de caractère de taille 1 minimum et 255 maximum
				if(preg_match("/^\d{1,11}$/",$numCommande) && preg_match("/^\D{1,255}$/",$name))
				{
					
					$repository=$this->getDoctrine()->getManager()->getRepository('ROGERPlastProdBundle:Commande');
					$commande = $repository->getCommande($numCommande,$name);	// Avec ça je tape la BDD et je récupère la commande
					
					// SI le résultat de la requête est une commande
					if(null != $commande)
					{
						return $this->render('ROGERPlastProdBundle:Client:suivi.html.twig',array('module' => $module, 'commande' => $commande)); // Que je renvoi dans la vue
					} 
					// Sinon on affiche une erreur.
					else
					{
						// Si on a que des espaces dans le nom.
						if(ctype_space($name))
						{
							$erreur = "Le champ Nom ne contient que des espaces, veuillez saisir un nom valide";
						}
						else
						{
							$erreur = "Le numéro de commande et/ou le nom que vous avez saisi n'est pas enregistré dans la base de données OU vous essayez d'accèder à un numéro de commande qui ne vous est pas attribué";
						}
						return $this->render('ROGERPlastProdBundle:Client:suivi.html.twig',array('module' => $module, 'form' => $form->createView(),'erreur' => $erreur)); // Que je renvoi dans la vue
					}
				} // Sinon on a un probleme de saisie dans le formulaire
				else
				{
					$erreur = "Le champ Nom attends une chaine de caractères, et le champ Numéro de commande un entier positif. Vous avez fait une erreur dans la saisie, vous devez saisir un Nom infèrieure à 255 caractères et un Numéro entre 0 et 99999999999";
					return $this->render('ROGERPlastProdBundle:Client:suivi.html.twig',array('module' => $module, 'form' => $form->createView(), 'erreur' => $erreur));
				}
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