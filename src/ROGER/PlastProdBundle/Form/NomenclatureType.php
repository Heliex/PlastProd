<?php

namespace ROGER\PlastProdBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NomenclatureType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom' ,'text', array('read_only' => true , 'disabled' => true))
            ->add('cheminDoc','text', array('required' => false))
			->add('tempsProduction','time')
			->add('tempsAssemblage','time')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ROGER\PlastProdBundle\Entity\Nomenclature'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'roger_plastprodbundle_nomenclature';
    }
}