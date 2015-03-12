<?php

namespace ROGER\PlastProdBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommandeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numCommande','text',array('read_only' => true,'disabled' => true,'required' => false))
            ->add('total' ,'text', array('read_only' => true , 'disabled' => true,'required' => false))
			->add('dateCommande','date', array('read_only' => true , 'disabled' => true, 'required' => false))
            ->add('estComplet','checkbox', array('required' => false))
			->add('estExpediee','checkbox', array('required' => false))
			->add('estProduite','checkbox',array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ROGER\PlastProdBundle\Entity\Commande'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'roger_plastprodbundle_commande';
    }
}
