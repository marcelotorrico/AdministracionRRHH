<?php

namespace MTD\CategoriasTrabajoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Requisito_CategoriaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('categoria', 'entity', array(
                'class' => 'MTDCategoriasTrabajoBundle:Categoria',
                'choice_label' => function ($categoria) {
                    return $categoria->getNombre();
                },
                'empty_value' => 'Seleccione una categoria'
            ))
            ->add('descripcion', null, array( 'required' => false ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MTD\CategoriasTrabajoBundle\Entity\Requisito_Categoria'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mtd_categoriastrabajobundle_requisito_categoria';
    }
}
