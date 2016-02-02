<?php

namespace MTD\SeleccionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Proyecto_Empleado
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\SeleccionBundle\Entity\Proyecto_EmpleadoRepository")
 */
class Proyecto_Empleado
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
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;

    /**
     * @ORM\ManyToOne(targetEntity="\MTD\ReclutamientoBundle\Entity\Empleado", inversedBy="proyectoEmpleado")
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
     * @ORM\ManyToOne(targetEntity="\MTD\ProyectoBundle\Entity\Proyecto", inversedBy="proyectoEmpleado")
     * @ORM\JoinColumn(name="id_proyecto", referencedColumnName="id")
     * @return integer
     */
    private $proyecto;
    public function setProyecto(\MTD\ProyectoBundle\Entity\Proyecto $proyecto)
    {
        $this->proyecto = $proyecto;
    }

    public function getProyecto()
    {
        return $this->proyecto;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="\MTD\AsistenciaBundle\Entity\Asistencia_Proyecto", mappedBy="proyectoEmpleado")
     */
    private $asistenciaProyecto;

    public function __construct()
    {
        $this->asistenciaProyecto = new ArrayCollection();
    }
    
    /**
     * Add asistenciaProyecto
     *
     * @param \MTD\AsistenciaBundle\Entity\Asistencia_Proyecto $asistenciaProyecto
     *
     * @return Proyecto_Empleado
     */
    public function addAsistenciaProyecto(\MTD\AsistenciaBundle\Entity\Asistencia_Proyecto $asistenciaProyecto)
    {
        $this->asistenciaProyecto[] = $asistenciaProyecto;

        return $this;
    }

    /**
     * Remove asistenciaProyecto
     *
     * @param \MTD\AsistenciaBundle\Entity\AsistenciaProyecto $asistenciaProyecto
     */
    public function removeAsistenciaProyecto(\MTD\AsistenciaBundle\Entity\Asistencia_Proyecto $asistenciaProyecto)
    {
        $this->asistenciaProyecto->removeElement($asistenciaProyecto);
    }

    /**
     * Get asistenciaProyecto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAsistenciaProyecto()
    {
        return $this->asistenciaProyecto;
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
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Proyecto_Empleado
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

