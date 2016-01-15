<?php

namespace MTD\SeleccionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contratacion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\SeleccionBundle\Entity\ContratacionRepository")
 */
class Contratacion
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
     * @var boolean
     *
     * @ORM\Column(name="entrevista", type="boolean")
     */
    private $entrevista;

    /**
     * @var boolean
     *
     * @ORM\Column(name="examen_medico", type="boolean")
     */
    private $examenMedico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso", type="date")
     */
    private $fechaIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;
    
    /**
     * @ORM\ManyToOne(targetEntity="\MTD\ReclutamientoBundle\Entity\Empleado", inversedBy="Contratacion")
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
     * @var integer
     *
     * @ORM\Column(name="id_categoria", type="integer")
     */
    private $categoria;
    
    /**
     * Set categoria
     *
     * @param integer $categoria
     *
     * @return Contratacion
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return integer
     */
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

    /**
     * Set entrevista
     *
     * @param boolean $entrevista
     *
     * @return Contratacion
     */
    public function setEntrevista($entrevista)
    {
        $this->entrevista = $entrevista;

        return $this;
    }

    /**
     * Get entrevista
     *
     * @return boolean
     */
    public function getEntrevista()
    {
        return $this->entrevista;
    }

    /**
     * Set examenMedico
     *
     * @param boolean $examenMedico
     *
     * @return Contratacion
     */
    public function setExamenMedico($examenMedico)
    {
        $this->examenMedico = $examenMedico;

        return $this;
    }

    /**
     * Get examenMedico
     *
     * @return boolean
     */
    public function getExamenMedico()
    {
        return $this->examenMedico;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     *
     * @return Contratacion
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Contratacion
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
    
    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Proyecto
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }
}

