<?php

namespace MTD\SeleccionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ascenso
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\SeleccionBundle\Entity\AscensoRepository")
 */
class Ascenso
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
     * @ORM\ManyToOne(targetEntity="\MTD\ReclutamientoBundle\Entity\Empleado", inversedBy="ascenso")
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
     * @ORM\ManyToOne(targetEntity="\MTD\CategoriasTrabajoBundle\Entity\Categoria", inversedBy="ascenso")
     * @ORM\JoinColumn(name="id_categoria", referencedColumnName="id")
     * @return integer
     */
    private $categoria;
    public function setCategoria(\MTD\CategoriasTrabajoBundle\Entity\Categoria $categoria)
    {
        $this->categoria = $categoria;
    }

    public function getCategoria()
    {
        return $this->categoria;
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

