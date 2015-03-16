<?php

/**
*	Controleur de la partie stocks.
* 	Le controleur agit de cette façon, pour telle action, affiche moi telle vue.
*/

namespace ROGER\PlastProdBundle\Controller;

use ROGER\PlastProdBundle\Form\MatiereType;
use ROGER\PlastProdBundle\Form\CommandeType;
use ROGER\PlastProdBundle\Entity\Matiere;
use ROGER\PlastProdBundle\Entity\Commande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ROGER\PlastProdBundle\Entity\ListeMatiere;
use ROGER\PlastProdBundle\Entity\ListeCommande;
use ROGER\PlastProdBundle\Form\ListeMatiereType;
use ROGER\PlastProdBundle\Form\ListeCommandeType;
use ROGER\PlastProdBundle\Entity\ListeNomenclature;



class StocksController extends Controller
{
	// Methode qui fais le lien entre PlastProd/Stocks/ Et la vue associée
	public function indexAction()
	{
		$module = "Stocks";
		return $this->render("ROGERPlastProdBundle:Stocks:stocks.html.twig",array('module'=>$module));
	}
	
	// Gestion du formulaire pour la partie matieres premiere
	public function matieresAction(Request $request)
	{
		$module = "Stocks - Gestion des matières premières";
		$em = $this->getDoctrine()->getManager();
		$repository = $this->getDoctrine()->getManager()->getRepository('ROGERPlastProdBundle:Matiere');
		$listeMatieres = $repository->findAll(); // Je récupère toutes les matières
		$collections = new ListeMatiere(); // Nouvelle collections de matiere
		foreach($listeMatieres as $matieres)
		{
			$collections->getMatiere()->add($matieres); // J'ajoute chaque matiere dans ma collection
		}
		
		$form = $this->createForm(new ListeMatiereType(),$collections)->add('modifier','submit'); // Je crée un formulaire qui contient toutes les matieres modifiables
		

		if($form->handleRequest($request)->isValid()) // Gestion de la soumission du formulaire
			{
				foreach($collections->getMatiere()->toArray() as $collect) // Pour chaque matiere
				{
					$em->persist($collect); // Je persiste les données
				}
				$em->flush(); // Puis j'applique les changement 
				return $this->redirect($this->generateUrl('roger_plast_prod_stocks_MP')); // Et enfin je redirige vers la page de gestion de MP.
			}
		return $this->render("ROGERPlastProdBundle:Stocks:matieres.html.twig",array('module'=>$module,'matieres' => $listeMatieres,'form' => $form->createView()));
	}
	
	public function nomenclatureAction(Request $request)
	{
		$module = "Stocks - Gestion des nomenclatures";
		$em = $this->getDoctrine()->getManager();
		$repository = $this->getDoctrine()->getManager()->getRepository('ROGERPlastProdBundle:Commande');
		$listeCommande = $repository->findAll();
		$collectionsCommande = new ListeCommande(); // Nouvelle collections de commande
		foreach($listeCommande as $commande)
		{
			$collectionsCommande->getCommande()->add($commande); // J'ajoute chaque commande dans ma collection
		}
		
		$form = $this->createForm(new ListeCommandeType(),$collectionsCommande)->add('modifier','submit'); // Je crée un formulaire qui contient toutes les matieres modifiables
		

		if($form->handleRequest($request)->isValid()) // Gestion de la soumission du formulaire
			{
				foreach($collectionsCommande->getCommande()->toArray() as $collect) // Pour chaque matiere
				{
					$em->persist($collect); // Je persiste les données
				}
				$em->flush(); // Puis j'applique les changement 
				return $this->redirect($this->generateUrl('roger_plast_prod_stocks_nomenclature')); // Et enfin je redirige vers la page de gestion de Nomenclature.
			}
		
		
		return $this->render("ROGERPlastProdBundle:Stocks:Nomenclature.html.twig",array('module'=>$module, 'commandes' => $listeCommande,'form' => $form->createView()));
	}
}
?>