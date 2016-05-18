<?php

namespace MTD\AsistenciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Asistencia
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\AsistenciaBundle\Entity\AsistenciaRepository")
 */
class Asistencia
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_ingreso_mañana", nullable=true, type="time")
     */
    private $horaIngresoManana;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_salida_mañana", nullable=true, type="time")
     */
    private $horaSalidaManana;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_ingreso_tarde", nullable=true, type="time")
     */
    private $horaIngresoTarde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_salida_tarde", nullable=true, type="time")
     */
    private $horaSalidaTarde;

    /**
     * @var string
     *
     * @ORM\Column(name="actividad", type="text", nullable = true)
     */
    private $actividad;

    /**
     * @var string
     *
     * @ORM\Column(name="total_horas_normales", nullable=true, type="string", length=50)
     */
    private $totalHorasNormales;

    /**
     * @var string
     *
     * @ORM\Column(name="total_horas_extras", nullable=true, type="string", length=50)
     */
    private $totalHorasExtras;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="cobrado", nullable = true, type="boolean")
     */
    private $cobrado;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="feriado", nullable = true, type="boolean")
     */
    private $feriado;
    
    /**
     * @ORM\OneToMany(targetEntity="\MTD\AsistenciaBundle\Entity\Asistencia_Proyecto", mappedBy="asistencia")
     */
    private $asistenciaProyecto;
    
    /**
     * @var float
     *
     * @ORM\Column(name="psgh", nullable = true, type="float")
     */
    private $psgh;
    
    /**
     * @ORM\OneToMany(targetEntity="\MTD\AsistenciaBundle\Entity\Falta", mappedBy="asistencia")
     */
    private $falta;

    public function __construct()
    {
        $this->asistenciaProyecto = new ArrayCollection();
        $this->falta = new ArrayCollection();
    }
    /**
     * Add falta
     *
     * @param \MTD\AsistenciaBundle\Entity\Falta $falta
     *
     * @return Asistencia
     */
    public function addFalta(\MTD\AsistenciaBundle\Entity\Falta $falta)
    {
        $this->falta[] = $falta;

        return $this;
    }

    /**
     * Remove falta
     *
     * @param \MTD\AsistenciaBundle\Entity\Falta $falta
     */
    public function removeFalta(\MTD\AsistenciaBundle\Entity\Falta $falta)
    {
        $this->falta->removeElement($falta);
    }

    /**
     * Get falta
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFalta()
    {
        return $this->falta;
    }
    
    /**
     * Add asistenciaProyecto
     *
     * @param \MTD\AsistenciaBundle\Entity\Asistencia_Proyecto $asistenciaProyecto
     *
     * @return Asistencia
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
     * @ORM\ManyToOne(targetEntity="\MTD\AsistenciaBundle\Entity\Configuracion", inversedBy="asistencia")
     * @ORM\JoinColumn(name="id_configuracion", referencedColumnName="id")
     * @return integer
     */
    private $configuracion;
    public function setConfiguracion(\MTD\AsistenciaBundle\Entity\Configuracion $configuracion)
    {
        $this->configuracion = $configuracion;
    }

    public function getConfiguracion()
    {
        return $this->configuracion;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="\MTD\ReclutamientoBundle\Entity\Empleado", inversedBy="asistencia")
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Asistencia
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set horaIngresoManana
     *
     * @param \DateTime $horaIngresoManana
     *
     * @return Asistencia
     */
    public function setHoraIngresoManana($horaIngresoManana)
    {
        $this->horaIngresoManana = $horaIngresoManana;

        return $this;
    }

    /**
     * Get horaIngresoManana
     *
     * @return \DateTime
     */
    public function getHoraIngresoManana()
    {
        return $this->horaIngresoManana;
    }

    /**
     * Set horaSalidaManana
     *
     * @param \DateTime $horaSalidaManana
     *
     * @return Asistencia
     */
    public function setHoraSalidaManana($horaSalidaMañana)
    {
        $this->horaSalidaManana = $horaSalidaMañana;

        return $this;
    }

    /**
     * Get horaSalidaManana
     *
     * @return \DateTime
     */
    public function getHoraSalidaManana()
    {
        return $this->horaSalidaManana;
    }

    /**
     * Set horaIngresoTarde
     *
     * @param \DateTime $horaIngresoTarde
     *
     * @return Asistencia
     */
    public function setHoraIngresoTarde($horaIngresoTarde)
    {
        $this->horaIngresoTarde = $horaIngresoTarde;

        return $this;
    }

    /**
     * Get horaIngresoTarde
     *
     * @return \DateTime
     */
    public function getHoraIngresoTarde()
    {
        return $this->horaIngresoTarde;
    }

    /**
     * Set horaSalidaTarde
     *
     * @param \DateTime $horaSalidaTarde
     *
     * @return Asistencia
     */
    public function setHoraSalidaTarde($horaSalidaTarde)
    {
        $this->horaSalidaTarde = $horaSalidaTarde;

        return $this;
    }

    /**
     * Get horaSalidaTarde
     *
     * @return \DateTime
     */
    public function getHoraSalidaTarde()
    {
        return $this->horaSalidaTarde;
    }

    /**
     * Set actividad
     *
     * @param string $actividad
     *
     * @return Asistencia
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * Get actividad
     *
     * @return string
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set totalHorasNormales
     *
     * @param string $totalHorasNormales
     *
     * @return Asistencia
     */
    public function setTotalHorasNormales($totalHorasNormales)
    {
        $this->totalHorasNormales = $totalHorasNormales;

        return $this;
    }

    /**
     * Get totalHorasNormales
     *
     * @return string
     */
    public function getTotalHorasNormales()
    {
        return $this->totalHorasNormales;
    }

    /**
     * Set totalHorasExtras
     *
     * @param string $totalHorasExtras
     *
     * @return Asistencia
     */
    public function setTotalHorasExtras($totalHorasExtras)
    {
        $this->totalHorasExtras = $totalHorasExtras;

        return $this;
    }

    /**
     * Get totalHorasExtras
     *
     * @return string
     */
    public function getTotalHorasExtras()
    {
        return $this->totalHorasExtras;
    }
    
    /**
     * Set psgh
     *
     * @param float $psgh
     *
     * @return Asistencia
     */
    public function setPsgh($psgh)
    {
        $this->psgh = $psgh;

        return $this;
    }

    /**
     * Get psgh
     *
     * @return float
     */
    public function getPsgh()
    {
        return $this->psgh;
    }
    
    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Asistencia
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
    
    /**
     * Set feriado
     *
     * @param boolean $feriado
     *
     * @return Asistencia
     */
    public function setFeriado($feriado)
    {
        $this->feriado = $feriado;

        return $this;
    }

    /**
     * Get feriado
     *
     * @return boolean
     */
    public function getFeriado()
    {
        return $this->feriado;
    }
    
    /**
     * Set cobrado
     *
     * @param boolean $cobrado
     *
     * @return Asistencia
     */
    public function setCobrado($cobrado)
    {
        $this->cobrado = $cobrado;

        return $this;
    }

    /**
     * Get cobrado
     *
     * @return boolean
     */
    public function getCobrado()
    {
        return $this->cobrado;
    }
}