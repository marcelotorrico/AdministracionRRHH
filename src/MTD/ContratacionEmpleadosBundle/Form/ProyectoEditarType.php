<?php

namespace MTD\ContratacionEmpleadosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProyectoEditarType extends AbstractType
{

    public function __construct($em,$idCliente,$idTipoProyecto) {
        $this->em = $em;
        $this->idCliente = $idCliente;
        $this->idTipoProyecto = $idTipoProyecto;
    }
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
                'data' => $this->em->getReference("MTDContratacionEmpleadosBundle:Cliente", $this->idCliente)
            ))
            ->add('tipo_proyecto', 'entity', array(
                'class' => 'MTDContratacionEmpleadosBundle:Tipo_Proyecto',
                'choice_label' => function ($tipo) {
                    return $tipo->getNombre();
                },
                'data' => $this->em->getReference("MTDContratacionEmpleadosBundle:Tipo_Proyecto", $this->idTipoProyecto)
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
