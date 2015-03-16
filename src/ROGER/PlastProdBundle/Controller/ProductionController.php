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

use ROGER\PlastProdBundle\Form\StockPdtFiniType;
use ROGER\PlastProdBundle\Entity\StockPdtFini;
use ROGER\PlastProdBundle\Entity\ListeStockPdtFini;
use ROGER\PlastProdBundle\Form\ListeStockPdtFiniType;

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
		$module = "Production - Visualiser les bons de commandes";
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $this->getDoctrine()->getManager()->getRepository("ROGERPlastProdBundle:Commande");
		
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
	
	public function superviserAction()
	{
		$module = "Production - Superviser la production";
		$em = $this->getDoctrine()->getEntityManager();
		$repository = $this->getDoctrine()->getManager()->getRepository("ROGERPlastProdBundle:StockPdtFini");
		$listeStocks = $repository->findAll();
		
		$collectionsStockPdtFini = new ListeStockPdtFini(); // Nouvelle collections de commande
		foreach($listeStocks as $stockpdtFini)
		{
			$collectionsStockPdtFini->getPdtFini()->add($stockpdtFini); // J'ajoute chaque commande dans ma collection
		}
		
		$form = $this->createForm(new ListeStockPdtFiniType(),$collectionsStockPdtFini); // Je crée un formulaire qui contient toutes les matieres modifiables
		return $this->render("ROGERPlastProdBundle:Production:superviser.html.twig",array('module' => $module,'form' => $form->createView()));
	}
}
?>