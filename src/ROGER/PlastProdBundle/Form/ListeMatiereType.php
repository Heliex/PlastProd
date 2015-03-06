<?php

namespace ROGER\PlastProdBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ListeMatiereType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matiere','collection',array('type' => new MatiereType(), 'by_reference' => false));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ROGER\PlastProdBundle\Entity\ListeMatiere'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'roger_plastprodbundle_listematiere';
    }
}
