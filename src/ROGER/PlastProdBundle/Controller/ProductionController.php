<?php

/**
*	Controleur de la partie production.
* 	Le controleur agit de cette façon, pour telle action, affiche moi telle vue.
*/

namespace ROGER\PlastProdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ROGER\PlastProdBundle\Form\CommandeType;
use ROGER\PlastProdBundle\Entity\Commande;
use ROGER\PlastProdBundle\Entity\ListeCommande;
use ROGER\PlastProdBundle\Form\ListeCommandeType;

class ProductionController extends Controller
{
	// Fonction qui fais le lien entre PlastProd/Production/ Et la vue associée
	public function productionAction()
	{
		$module = "Production";
		return $this->render("ROGERPlastProdBundle:Production:production.html.twig",array('module'=>$module));
	}
	
	// Fonction qui fais le lien entre PlastProd/Production/LancerProd Et la vue associée
	public function lancementAction(Request $request)
	{
		$module = "Production";
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $this->getDoctrine()->getManager()->getRepository("ROGERPlastProdBundle:Commande");
		$commande = $repository->getTenLastCommande();
		
		$listeCommande = $repository->getTenLastCommande();
		$collectionsCommande = new ListeCommande(); // Nouvelle collections de commande
		foreach($listeCommande as $commande)
		{
			$collectionsCommande->getCommande()->add($commande); // J'ajoute chaque commande dans ma collection
		}
		
		$form = $this->createForm(new ListeCommandeType(),$collectionsCommande)->add('Valider','submit'); // Je crée un formulaire qui contient toutes les matieres modifiables
		

		if($form->handleRequest($request)->isValid()) // Gestion de la soumission du formulaire
			{
				foreach($collectionsCommande->getCommande()->toArray() as $collect) // Pour chaque commande
				{
					$em->persist($collect); // Je persiste les données
				}
				$em->flush(); // Puis j'applique les changement 
				return $this->redirect($this->generateUrl('roger_plast_prod_production_lancement')); // Et enfin je redirige vers la page de lancement de production.
			}
		return $this->render("ROGERPlastProdBundle:Production:lancement.html.twig",array('module'=>$module,"form"=>$form->createView()));
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