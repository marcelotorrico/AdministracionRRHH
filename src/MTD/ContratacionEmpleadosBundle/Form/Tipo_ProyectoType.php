<?php

namespace MTD\ContratacionEmpleadosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Tipo_ProyectoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MTD\ContratacionEmpleadosBundle\Entity\Tipo_Proyecto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mtd_contratacionempleadosbundle_tipo_proyecto';
    }
}
