<?php

namespace MTD\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lugar
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Lugar
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="Proyecto", mappedBy="lugar")
     */
    private $proyecto;
    
    /**
     * @ORM\OneToMany(targetEntity="\MTD\ReclutamientoBundle\Entity\Empleado", mappedBy="lugar")
     */
    private $empleado;
    
    public function __construct()
    {
        $this->proyecto = new \Doctrine\Common\Collections\ArrayCollection();
        $this->empleado = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add proyecto
     *
     * @param \MTD\ProyectoBundle\Entity\Proyecto $proyecto
     *
     * @return Lugar
     */
    public function addProyecto(\MTD\ProyectoBundle\Entity\Proyecto $proyecto)
    {
        $this->proyecto[] = $proyecto;

        return $this;
    }

    /**
     * Remove proyecto
     *
     * @param \MTD\ProyectoBundle\Entity\Proyecto $proyecto
     */
    public function removeProyecto(\MTD\ProyectoBundle\Entity\Proyecto $proyecto)
    {
        $this->proyecto->removeElement($proyecto);
    }

    /**
     * Get proyecto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }

    /**
     * Add empleado
     *
     * @param \MTD\ReclutamientoBundle\Entity\Empleado $empleado
     *
     * @return Lugar
     */
    public function addEmpleado(\MTD\ReclutamientoBundle\Entity\Empleado $empleado)
    {
        $this->empleado[] = $empleado;

        return $this;
    }

    /**
     * Remove empleado
     *
     * @param \MTD\ReclutamientoBundle\Entity\Empleado $empleado
     */
    public function removeEmpleado(\MTD\ReclutamientoBundle\Entity\Empleado $empleado)
    {
        $this->empleado->removeElement($empleado);
    }

    /**
     * Get empleado
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmpleado()
    {
        return $this->empleado;
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Lugar
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}

