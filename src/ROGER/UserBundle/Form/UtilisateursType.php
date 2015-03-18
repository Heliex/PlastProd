<?php

namespace ROGER\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UtilisateursType extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username','text',array('read_only' => true,'disabled' => true))
            ->add('password','password',array('always_empty' => false))
        ;
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
        return 'roger_userbundle_utilisateurs';
    }
}
