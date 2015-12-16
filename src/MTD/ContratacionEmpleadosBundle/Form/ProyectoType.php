<?php

namespace MTD\ContratacionEmpleadosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProyectoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('montoContrato')
            ->add('plazoEntrega', 'date', [
                        'widget' => 'single_text',
                        'format' => 'dd-MM-yyyy',
                        'attr' => [
                            'data-provide' => 'datepicker',
                            'data-date-format' => 'dd-mm-yyyy'
                        ]
                    ])
            ->add('lugar')
            ->add('cliente', 'entity', array(
                'class' => 'MTDContratacionEmpleadosBundle:Cliente',
                'choice_label' => function ($cliente) {
                    return $cliente->nombreCompleto();
                },
                'empty_value' => 'Seleccione un cliente'
            ))
            ->add('tipo_proyecto', 'entity', array(
                'class' => 'MTDContratacionEmpleadosBundle:Tipo_Proyecto',
                'choice_label' => function ($tipo) {
                    return $tipo->getNombre();
                },
                'empty_value' => 'Seleccione un tipo de proyecto'
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MTD\ContratacionEmpleadosBundle\Entity\Proyecto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mtd_contratacionempleadosbundle_proyecto';
    }
}
