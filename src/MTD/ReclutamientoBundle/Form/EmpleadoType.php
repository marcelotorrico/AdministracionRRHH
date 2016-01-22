<?php

namespace MTD\ReclutamientoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmpleadoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellido')
            ->add('fechaNacimiento', 'date', [
                  'widget' => 'single_text',
                  'format' => 'dd-MM-yyyy',
                  'attr' => [
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy'
                  ]
                ])
            ->add('lugar', 'entity', array(
                'required' => false,
                'class' => 'MTDProyectoBundle:Lugar',
                'choice_label' => function ($lugar) {
                    return $lugar->getNombre();
                },
                'empty_value' => 'Seleccione un lugar'
            ))
            ->add('estadoCivil', 'choice', array(
                   'choices'   => array('Casado' => 'Casado', 'Soltero' => 'Soltero'),
                   'empty_value' => 'Seleccione el estado civil'
                  ))
            ->add('dependientes', null, array( 'required' => false ))
            ->add('cedulaIdentidad')
            ->add('direccion')
            ->add('zona', null, array( 'required' => false ))
            ->add('telefonoParticular', null, array( 'required' => false ))
            ->add('telefonoMovil', null, array( 'required' => false ))
            ->add('gradoEscolaridad', null, array( 'required' => false ))
            ->add('profesion')
            ->add('otrosCursos', null, array( 'required' => false ))
            ->add('trabajosAnteriores', null, array( 'required' => false ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MTD\ReclutamientoBundle\Entity\Empleado'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mtd_reclutamientobundle_empleado';
    }
}
