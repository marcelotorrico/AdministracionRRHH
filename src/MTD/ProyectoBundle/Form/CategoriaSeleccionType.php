<?php

namespace MTD\ProyectoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoriaSeleccionType extends AbstractType
{
    private $categorias;
    public function __construct($categorias)
    {
        $this->categorias = $categorias;

    }
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $categorias = $this->categorias;
        $builder
            ->add('categoria', 'entity', array(
                'required' => false,
                'class' => 'MTDCategoriasTrabajoBundle:Categoria',
                'query_builder' => function($er){
                    return $er->createQueryBuilder('c')
                        ->where('c.activo = TRUE')
                        ->orderBy('c.nombre', 'ASC');
                },
                'choice_label' => function ($categoria) {
                    return $categoria->getNombre();
                },
                'empty_value' => 'Seleccione una categoria'
            ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MTD\ProyectoBundle\Entity\Proyecto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mtd_proyectobundle_categoria';
    }
}
