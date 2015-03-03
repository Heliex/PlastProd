<?php

/**
* 	Controleur qui gére toutes la partie accueil sans être authentifié.
*	Le controleur agit de cette façon, pour telle action, affiche moi telle
*/

namespace ROGER\PlastProdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


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
		if(null == $user)
		{
			$user = "invité";
		}
		else
		{
			$user = $user->getUsername();
		}
		return $this->render('ROGERPlastProdBundle:PlastProd:userInfo.html.twig',array("user" => $user));
	}
}
?>