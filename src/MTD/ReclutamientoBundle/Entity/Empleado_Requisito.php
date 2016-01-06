<?php

namespace MTD\ReclutamientoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado_Requisito
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\ReclutamientoBundle\Entity\Empleado_RequisitoRepository")
 */
class Empleado_Requisito
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="\MTD\ReclutamientoBundle\Entity\Empleado", inversedBy="empleadoRequisito")
     * @ORM\JoinColumn(name="id_empleado", referencedColumnName="id")
     * @return integer
     */
    private $empleado;
    public function setEmpleado(\MTD\ReclutamientoBundle\Entity\Empleado $empleado)
    {
        $this->empleado = $empleado;
    }

    public function getEmpleado()
    {
        return $this->empleado;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="\MTD\CategoriasTrabajoBundle\Entity\Requisito_Categoria", inversedBy="empleadoRequisito")
     * @ORM\JoinColumn(name="id_requisito", referencedColumnName="id")
     * @return integer
     */
    private $requisito;
    public function setRequisito(\MTD\CategoriasTrabajoBundle\Entity\Requisito_Categoria $requisito)
    {
        $this->requisito = $requisito;
    }

    public function getRequisito()
    {
        return $this->requisito;
    }
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

