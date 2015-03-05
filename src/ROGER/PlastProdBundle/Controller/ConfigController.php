<?php

/**
* 	Controleur qui gére toutes la partie Configuration qui nécessite d'être identifé.
*	Le controleur agit de cette façon, pour telle action, affiche moi telle vue.
*/

namespace ROGER\PlastProdBundle\Controller;

use ROGER\UserBundle\Entity\Utilisateurs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ConfigController extends Controller
{
    public function indexAction()
    {
		$module = "Panneau de configuration";
		$repository = $this->getDoctrine()->getManager()->getRepository("ROGERUserBundle:Utilisateurs");
		$listeUser = $repository->getAllUsers();
        return $this->render('ROGERPlastProdBundle:Config:index.html.twig', array('module' => $module, 'utilisateurs' => $listeUser));
    }
	
	public function accesAction()
    {
		$module = "Panneau de configuration";
		
        return $this->render('ROGERPlastProdBundle:Config:acces.html.twig', array('module' => $module));
    }
	
	public function droitsAction()
    {
		$module = "Panneau de configuration";
        return $this->render('ROGERPlastProdBundle:Config:droits.html.twig', array('module' => $module));
    }
	
	public function addAction(Request $request)
	{
		$module = "Panneau de configuration";
		$user = new Utilisateurs();
		$formBuilder = $this->get('form.factory')->createBuilder('form',$user);
		
		$formBuilder
							->add('username','text')
							->add('password','password')
							->add('email','text')
							->add('Ajouter','submit');
		$form = $formBuilder->getForm();
		
		$form->handleRequest($request);
		
		if($form->isValid())
		{
			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();
			
			$request->getSession()->getFlashBag()->add('notice','utilisateur bien enregistré. ');
			
			return $this->redirect($this->generateUrl('roger_plast_prod_config', array('module' => $module)));
		}

		return $this->render('ROGERPlastProdBundle:Config:add.html.twig',array('form' => $form->createView(),'module' => $module));
							
	}
	
}
?>