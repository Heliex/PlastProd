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


class ConfigController extends Controller
{
    public function indexAction()
    {
		$module = "Panneau de configuration";
		$repository = $this->getDoctrine()->getManager()->getRepository("ROGERUserBundle:Utilisateurs");
		$listeUser = $repository->getAllUsers();
        return $this->render('ROGERPlastProdBundle:Config:index.html.twig', array('module' => $module, 'utilisateurs' => $listeUser));
    }
	
	public function utilisateurAction()
    {
		$module = "Panneau de configuration";
		
        return $this->render('ROGERPlastProdBundle:Config:utilisateur.html.twig', array('module' => $module));
    }
	
	public function droitsAction()
    {
		$module = "Panneau de configuration";
        return $this->render('ROGERPlastProdBundle:Config:droits.html.twig', array('module' => $module));
    }
	
	public function addAction(Request $request)
	{
		$module = "Panneau de configuration";
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
		->add('roles','choice',array('choices' => array('ROLE_USER' => 'ROLE_USER', 'ROLE_ADMIN' => 'ROLE_ADMIN','ROLE_PROD' => 'ROLE_PROD','ROLE_STOCKS' => 'ROLE_STOCKS'), 'required' => true, 'multiple' => true))
		->add('ajouter','submit');
        $form->setData($user);
		$role = $form->get('roles')->getData();
		$user->setRoles($role);
    
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
	
}
?>