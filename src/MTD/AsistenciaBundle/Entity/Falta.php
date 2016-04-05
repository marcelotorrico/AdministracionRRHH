<?php

namespace MTD\AsistenciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Falta
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\AsistenciaBundle\Entity\FaltaRepository")
 */
class Falta
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
     * @ORM\Column(name="aviso", type="boolean")
     */
    private $aviso;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo", nullable=true, type="text")
     */
    private $motivo;

    /**
     * @ORM\ManyToOne(targetEntity="\MTD\AsistenciaBundle\Entity\Asistencia", inversedBy="falta")
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
     * Set aviso
     *
     * @param boolean $aviso
     *
     * @return Falta
     */
    public function setAviso($aviso)
    {
        $this->aviso = $aviso;

        return $this;
    }

    /**
     * Get aviso
     *
     * @return boolean
     */
    public function getAviso()
    {
        return $this->aviso;
    }

    /**
     * Set motivo
     *
     * @param string $motivo
     *
     * @return Falta
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get motivo
     *
     * @return string
     */
    public function getMotivo()
    {
        return $this->motivo;
    }
}

