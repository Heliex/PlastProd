<?php

/**
*	Controleur qui gère toutes les vues pour le module Client.
*    Le controleur agit de cette façon, pour telle action, affiche moi telle vue.
*/

namespace ROGER\PlastProdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ClientController extends Controller
{
	// Vue quand on clique sur le module Client.
	public function clientAction()
	{
		$module = "Client";
		return $this->render('ROGERPlastProdBundle:Client:client.html.twig', array('module'=>$module));
	}
	
	// Vue Suvi pour le client
	public function suiviAction()
	{
		$module = "Client";
		return $this->render("ROGERPlastProdBundle:Client:suivi.html.twig",array('module'=>$module));
	}
	
	// Vue pour les infos entreprise
	public function infosAction()
	{
		$module = "Client";
		return $this->render("ROGERPlastProdBundle:Client:infos.html.twig",array('module'=>$module));
	}
	
	// Vue pour communiquez avec l'entreprise
	public function communiqueAction()
	{
		$module = "Client";
		return $this->render("ROGERPlastProdBundle:Client:communique.html.twig",array('module'=>$module));
	}
}
?>