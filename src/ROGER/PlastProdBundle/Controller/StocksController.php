<?php

/**
*	Controleur de la partie stocks.
* 	Le controleur agit de cette façon, pour telle action, affiche moi telle vue.
*/

namespace ROGER\PlastProdBundle\Controller;

use ROGER\PlastProdBundle\Form\MatiereType;
use ROGER\PlastProdBundle\Entity\Matiere;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ROGER\PlastProdBundle\Entity\ListeMatiere;
use ROGER\PlastProdBundle\Form\ListeMatiereType;


class StocksController extends Controller
{
	// Methode qui fais le lien entre PlastProd/Stocks/ Et la vue associée
	public function indexAction()
	{
		$module = "Stocks";
		return $this->render("ROGERPlastProdBundle:Stocks:stocks.html.twig",array('module'=>$module));
	}
	
	public function matieresAction(Request $request)
	{
		$module = "Stocks";
		$em = $this->getDoctrine()->getManager();
		$repository = $this->getDoctrine()->getManager()->getRepository('ROGERPlastProdBundle:Matiere');
		$listeMatieres = $repository->findAll();
		$collections = new ListeMatiere();
		foreach($listeMatieres as $matieres)
		{
			$collections->getMatiere()->add($matieres);
			
		}
		
		$form = $this->createForm(new ListeMatiereType(),$collections)->add('modifier','submit');
		

		if($form->handleRequest($request)->isValid())
			{
				foreach($collections->getMatiere()->toArray() as $collect)
				{
					$em->persist($collect);
				}
				$em->flush();
				return $this->redirect($this->generateUrl('roger_plast_prod_stocks_MP'));
			}
			else
			{
			  
			}
		return $this->render("ROGERPlastProdBundle:Stocks:matieres.html.twig",array('module'=>$module,'matieres' => $listeMatieres,'form' => $form->createView()));
	}
	
	public function nomenclatureAction()
	{
		$module = "Stocks";
		$repository = $this->getDoctrine()->getManager()->getRepository('ROGERPlastProdBundle:Commande');
		$listeCommande = $repository->getAllCommandes();
		return $this->render("ROGERPlastProdBundle:Stocks:Nomenclature.html.twig",array('module'=>$module, 'commandes' => $listeCommande));
	}
}
?>