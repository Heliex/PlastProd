<?php

namespace ROGER\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RolesType extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('username','text',array('read_only' => true))
            ->add('roles','choice',array('multiple'=> true,'choices' => array('ROLE_USER' => 'ROLE_USER', 'ROLE_STOCKS' => 'ROLE_STOCKS','ROLE_PROD' =>'ROLE_PROD','ROLE_ADMIN'=>'ROLE_ADMIN','ROLE_SUPER_ADMIN'=>'ROLE_SUPER_ADMIN')));
    }
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ROGER\UserBundle\Entity\Utilisateurs'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'roger_userbundle_roles';
    }
}