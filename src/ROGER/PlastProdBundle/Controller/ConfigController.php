<?php

/**
* 	Controleur qui gére toutes la partie Configuration qui nécessite d'être identifé.
*	Le controleur agit de cette façon, pour telle action, affiche moi telle vue.
*/

namespace ROGER\PlastProdBundle\Controller;

use ROGER\UserBundle\Entity\Utilisateurs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ROGER\UserBundle\Form\UtilisateursType;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use ROGER\UserBundle\Entity\ListeUtilisateurs;
use ROGER\UserBundle\Form\ListeUtilisateursType;
use ROGER\UserBundle\Form\ListeRolesType;


class ConfigController extends Controller
{
    public function indexAction()
    {
		$module = "Panneau de configuration";
        return $this->render('ROGERPlastProdBundle:Config:index.html.twig', array('module' => $module));
    }
	
	public function utilisateurAction()
    {
		$module = "Panneau de configuration - Gérer les utilisateurs";
		
        return $this->render('ROGERPlastProdBundle:Config:utilisateur.html.twig', array('module' => $module));
    }
	
	public function droitsAction()
    {
		$module = "Panneau de configuration - Gérer les droits des utilisateurs ";
        return $this->render('ROGERPlastProdBundle:Config:droits.html.twig', array('module' => $module));
    }
	
	public function addAction(Request $request)
	{
		$module = "Panneau de configuration - Gérer les utilisateurs - Ajouter un utilisateur";
		/** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $user = $userManager->createUser();
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }
		$em = $this->getDoctrine()->getEntityManager();
        $form = $formFactory->createForm()
		->add('ajouter','submit');
        $form->setData($user);

       if($form->handleRequest($request)->isValid()) // Gestion de la soumission du formulaire
		{
				$em->persist($user); // Je persiste les données
			
				$em->flush(); // Puis j'applique les changement 
				$request->getSession()->getFlashBag()->add('userAdded','Utilisateur bien enregistré');
				return $this->redirect($this->generateUrl('roger_plast_prod_config_ajout')); // Et enfin je redirige vers la page de gestion de MP.
		}
		
        return $this->render('ROGERPlastProdBundle:Config:add.html.twig', array(
            'form' => $form->createView(),'module' => $module
        ));
	}
	
	public function modifierUserAction(Request $request)
	{
		$module = "Panneau de configuration - Gérer les utilisateurs - Modifer un/des utilisateur(s)";
		
		$em = $this->getDoctrine()->getManager();
		$repository = $this->getDoctrine()->getManager()->getRepository('ROGERUserBundle:Utilisateurs');
		$listeUsers = $repository->findAll();
		$collections = new listeUtilisateurs();
		foreach($listeUsers as $users)
		{
			$collections->getUtilisateurs()->add($users);
		}
		
		$form = $this->createForm(new ListeUtilisateursType(),$collections)->add('modifier','submit');
		
		// SI formulaire valide
		if($form->handleRequest($request)->isValid())
		{
			$formulaire = $form->getData();
			$listeUtilisateurs = $formulaire->getUtilisateurs();
			
			foreach($listeUtilisateurs as $utilisateur)
			{
				$password = $utilisateur->getPassword();
				// Si le password ne contient que des espaces 
				if(ctype_space($password))
				{
					$erreur="Un/des mot(s) de passe est/sont composé uniquement de caractère blancs";
					return $this->render('ROGERPlastProdBundle:Config:modifuser.html.twig',array('module' => $module, 'form' => $form->createView(),'erreur' => $erreur));
				}
				
			}
			foreach($collections->getUtilisateurs()->toArray() as $collect)
			{
				// Gestion de l'encodage des mdp
				$hash = $this->get('security.password_encoder')->encodePassword($collect,$collect->getPassword());
				$collect->setPassword($hash);
				
				// On persiste les données une fois que le mdp a été encodé
				$em->persist($collect);
			}
			 // Et on flush
			  $em->flush();
			$request->getSession()->getFlashBag()->add('userModified','Les modifications des mots de passe ont été bien pris en compte');
			
			return $this->redirect($this->generateUrl('roger_plast_prod_config_modifieruser'));
		}
		
		return $this->render('ROGERPlastProdBundle:Config:modifuser.html.twig',array('module' => $module,'form' => $form->createView()));
	}
	
	public function droitsAjoutAction(Request $request)
	{
		$module = "Panneau de configuration - Gérer les droits des utilisateurs - Ajouter un/des droit(s)";
		$em = $this->getDoctrine()->getManager();
		$repository = $this->getDoctrine()->getManager()->getRepository('ROGERUserBundle:Utilisateurs');
		$listeUsers = $repository->findAll();
		$collections = new listeUtilisateurs();
		foreach($listeUsers as $users)
		{
			$collections->getUtilisateurs()->add($users);
		}
		
		$form = $this->createForm(new ListeRolesType(),$collections)->add('Valider','submit');
		
		// Gestion de la soumission du formulaire
		if($form->handleRequest($request)->isValid())
		{
			// Pour chaque utilisateurs
			foreach($collections->getUtilisateurs()->toArray() as $collect)
			{
				// Je persiste la modif des roles
				$em->persist($collect);
			}
			
			// Et j'applique les changement
			$em->flush();
		}
		return $this->render('ROGERPlastProdBundle:Config:ajoutDroits.html.twig', array('module' => $module, 'form' => $form->createView()));
	}
	
	public function droitsSuppressAction(Request $request)
	{
		$module = "Panneau de configuration - Gérer les droits des utilisateurs - Supprimer un/des droits";
		$em = $this->getDoctrine()->getManager();
		$repository = $this->getDoctrine()->getManager()->getRepository('ROGERUserBundle:Utilisateurs');
		$listeUsers = $repository->findAll();
		$collections = new listeUtilisateurs();
		foreach($listeUsers as $users)
		{
			$collections->getUtilisateurs()->add($users);
		}
		
		$form = $this->createForm(new ListeRolesType(),$collections)->add('Valider','submit');
		
		// Gestion de la soumission du formulaire
		if($form->handleRequest($request)->isValid())
		{
			// Pour chaque utilisateurs
			foreach($collections->getUtilisateurs()->toArray() as $collect)
			{
				// Je persiste la modif des roles
				$em->persist($collect);
			}
			// Et j'applique les changement
			$em->flush();
		}
		return $this->render('ROGERPlastProdBundle:Config:supprimerDroits.html.twig',array('module' => $module,'form' => $form->createView()));
	}
}
?>