<?php

namespace MTD\ReclutamientoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmpleadoEditarType extends AbstractType
{
    public function __construct($estadoCivil, $otrosCursos, $trabajosAnteriores) {
        $this->estadoCivil = $estadoCivil;
        $this->otrosCursos = $otrosCursos;
        $this->trabajosAnteriores = $trabajosAnteriores;
    }
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
            ->add('lugar', null, array( 'required' => false ))
            ->add('estadoCivil', 'choice', array(
                   'choices'   => array('Casado' => 'Casado', 'Soltero' => 'Soltero'),
                   'data' => $this->estadoCivil
                  ))
            ->add('dependientes', null, array( 'required' => false ))
            ->add('cedulaIdentidad')
            ->add('direccion')
            ->add('zona', null, array( 'required' => false ))
            ->add('telefonoParticular', null, array( 'required' => false ))
            ->add('telefonoMovil', null, array( 'required' => false ))
            ->add('gradoEscolaridad', null, array( 'required' => false ))
            ->add('profesion')
            ->add('otrosCursos', null, array( 'required' => false, 'data' => $this->otrosCursos ))
            ->add('trabajosAnteriores', null, array( 'required' => false, 'data' => $this->trabajosAnteriores ))
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
