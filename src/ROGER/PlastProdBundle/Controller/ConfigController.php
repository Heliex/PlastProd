<?php

/**
* 	Controleur qui gére toutes la partie Configuration qui nécessite d'être identifé.
*	Le controleur agit de cette façon, pour telle action, affiche moi telle vue.
*/

namespace ROGER\PlastProdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConfigController extends Controller
{
    public function indexAction()
    {
		$module = "Panneau de configuration";
        return $this->render('ROGERPlastProdBundle:Config:index.html.twig', array('module' => $module));
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
}
?>