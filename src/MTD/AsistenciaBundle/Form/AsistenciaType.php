<?php

namespace MTD\AsistenciaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AsistenciaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha', 'date', [
                  'widget' => 'single_text',
                  'format' => 'dd-MM-yyyy',
                  'attr' => [
                    'data-provide' => 'datepicker',
                    'data-date-format' => 'dd-mm-yyyy'
                  ]
                ])
            ->add('horaIngresoManana', 'text')
            ->add('horaSalidaManana', 'text')
            ->add('horaIngresoTarde', 'text')
            ->add('horaSalidaTarde', 'text')
            ->add('actividad')
            ->add('totalHorasNormales')
            ->add('totalHorasExtras')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MTD\AsistenciaBundle\Entity\Asistencia'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mtd_asistenciabundle_asistencia';
    }
}
