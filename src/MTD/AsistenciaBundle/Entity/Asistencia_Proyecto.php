<?php

namespace MTD\AsistenciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asistencia_Proyecto
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\AsistenciaBundle\Entity\Asistencia_ProyectoRepository")
 */
class Asistencia_Proyecto
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
     * @ORM\Column(name="horas_normales", type="string", length=50)
     */
    private $horasNormales;

    /**
     * @var string
     *
     * @ORM\Column(name="horas_extras", type="string", length=50)
     */
    private $horasExtras;

    /**
     * @ORM\ManyToOne(targetEntity="\MTD\SeleccionBundle\Entity\Proyecto_Empleado", inversedBy="asistenciaProyecto")
     * @ORM\JoinColumn(name="id_proyecto", referencedColumnName="id")
     * @return integer
     */
    private $proyectoEmpleado;
    public function setProyectoEmpleado(\MTD\SeleccionBundle\Entity\Proyecto_Empleado $proyectoEmpleado)
    {
        $this->proyectoEmpleado = $proyectoEmpleado;
    }

    public function getProyectoEmpleado()
    {
        return $this->proyectoEmpleado;
    }

    /**
     * @ORM\ManyToOne(targetEntity="\MTD\AsistenciaBundle\Entity\Asistencia", inversedBy="asistenciaProyecto")
     * @ORM\JoinColumn(name="id_asistencia", referencedColumnName="id")
     * @return integer
     */
    private $asistencia;
    public function setAsistencia(\MTD\AsistenciaBundle\Entity\Asistencia $asistencia)
    {
        $this->asistencia = $asistencia;
    }

    public function getAsistencia()
    {
        return $this->asistencia;
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
     * Set horasNormales
     *
     * @param string $horasNormales
     *
     * @return Asistencia_Proyecto
     */
    public function setHorasNormales($horasNormales)
    {
        $this->horasNormales = $horasNormales;

        return $this;
    }

    /**
     * Get horasNormales
     *
     * @return string
     */
    public function getHorasNormales()
    {
        return $this->horasNormales;
    }

    /**
     * Set horasExtras
     *
     * @param string $horasExtras
     *
     * @return Asistencia_Proyecto
     */
    public function setHorasExtras($horasExtras)
    {
        $this->horasExtras = $horasExtras;

        return $this;
    }

    /**
     * Get horasExtras
     *
     * @return string
     */
    public function getHorasExtras()
    {
        return $this->horasExtras;
    }
}

