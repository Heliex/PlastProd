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
}
?>