<?php

namespace MTD\AsistenciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Configuracion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\AsistenciaBundle\Entity\ConfiguracionRepository")
 */
class Configuracion
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
     * @ORM\Column(name="hora_ingreso_manana", type="time")
     */
    private $horaIngresoManana;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_salida_manana", type="time")
     */
    private $horaSalidaManana;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_ingreso_tarde", type="time")
     */
    private $horaIngresoTarde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_salida_tarde", type="time")
     */
    private $horaSalidaTarde;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="numero_dias", type="integer")
     */
    private $numeroDias;

    /**
     * @ORM\OneToMany(targetEntity="\MTD\AsistenciaBundle\Entity\Asistencia", mappedBy="configuracion")
     */
    private $asistencia;

    public function __construct()
    {
        $this->asistencia = new ArrayCollection();
    }
    /**
     * Add asistencia
     *
     * @param \MTD\AsistenciaBundle\Entity\Asistencia $asistencia
     *
     * @return Configuracion
     */
    public function addAsistencia(\MTD\AsistenciaBundle\Entity\Asistencia $asistencia)
    {
        $this->asistencia[] = $asistencia;

        return $this;
    }

    /**
     * Remove asistencia
     *
     * @param \MTD\AsistenciaBundle\Entity\Asistencia $asistencia
     */
    public function removeAsistencia(\MTD\AsistenciaBundle\Entity\Asistencia $asistencia)
    {
        $this->asistencia->removeElement($asistencia);
    }

    /**
     * Get asistencia
     *
     * @return \Doctrine\Common\Collections\Collection
     */
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
     * Set horaIngresoManana
     *
     * @param \DateTime $horaIngresoManana
     *
     * @return Configuracion
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
     * @return Configuracion
     */
    public function setHoraSalidaManana($horaSalidaManana)
    {
        $this->horaSalidaManana = $horaSalidaManana;

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
     * @return Configuracion
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
     * @return Configuracion
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
     * Set numeroDias
     *
     * @param integer $numeroDias
     *
     * @return Configuracion
     */
    public function setNumeroDias($numeroDias)
    {
        $this->numeroDias = $numeroDias;

        return $this;
    }

    /**
     * Get numeroDias
     *
     * @return integer
     */
    public function getNumeroDias()
    {
        return $this->numeroDias;
    }
    
    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Configuracion
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

