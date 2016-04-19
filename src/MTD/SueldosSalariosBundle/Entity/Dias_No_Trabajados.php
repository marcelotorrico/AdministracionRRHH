<?php

namespace MTD\SueldosSalariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dias_No_Trabajados
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\SueldosSalariosBundle\Entity\Dias_No_TrabajadosRepository")
 */
class Dias_No_Trabajados
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
     * @var float
     *
     * @ORM\Column(name="psgh", type="float")
     */
    private $psgh;

    /**
     * @var float
     *
     * @ORM\Column(name="pesos_psgh", nullable = true, type="float")
     */
    private $pesosPsgh;

    /**
     * @var float
     *
     * @ORM\Column(name="falla", nullable = true, type="float")
     */
    private $falla;

    /**
     * @var integer
     *
     * @ORM\Column(name="feriado_perdido", nullable = true, type="integer")
     */
    private $feriadoPerdido;

    /**
     * @var float
     *
     * @ORM\Column(name="pesos_falla", nullable = true, type="float")
     */
    private $pesosFalla;

    /**
     * @ORM\ManyToOne(targetEntity="\MTD\SueldosSalariosBundle\Entity\Sueldos", inversedBy="dias_no_trabajados")
     * @ORM\JoinColumn(name="id_sueldo", referencedColumnName="id")
     * @return integer
     */
    private $sueldo;
    public function setSueldo(\MTD\SueldosSalariosBundle\Entity\Sueldos $sueldo)
    {
        $this->sueldo = $sueldo;
    }

    public function getSueldo()
    {
        return $this->sueldo;
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
     * Set psgh
     *
     * @param float $psgh
     *
     * @return Dias_No_Trabajados
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
     * Set pesosPsgh
     *
     * @param float $pesosPsgh
     *
     * @return Dias_No_Trabajados
     */
    public function setPesosPsgh($pesosPsgh)
    {
        $this->pesosPsgh = $pesosPsgh;

        return $this;
    }

    /**
     * Get pesosPsgh
     *
     * @return float
     */
    public function getPesosPsgh()
    {
        return $this->pesosPsgh;
    }

    /**
     * Set falla
     *
     * @param float $falla
     *
     * @return Dias_No_Trabajados
     */
    public function setFalla($falla)
    {
        $this->falla = $falla;

        return $this;
    }

    /**
     * Get falla
     *
     * @return float
     */
    public function getFalla()
    {
        return $this->falla;
    }

    /**
     * Set feriadoPerdido
     *
     * @param integer $feriadoPerdido
     *
     * @return Dias_No_Trabajados
     */
    public function setFeriadoPerdido($feriadoPerdido)
    {
        $this->feriadoPerdido = $feriadoPerdido;

        return $this;
    }

    /**
     * Get feriadoPerdido
     *
     * @return integer
     */
    public function getFeriadoPerdido()
    {
        return $this->feriadoPerdido;
    }

    /**
     * Set pesosFalla
     *
     * @param float $pesosFalla
     *
     * @return Dias_No_Trabajados
     */
    public function setPesosFalla($pesosFalla)
    {
        $this->pesosFalla = $pesosFalla;

        return $this;
    }

    /**
     * Get pesosFalla
     *
     * @return float
     */
    public function getPesosFalla()
    {
        return $this->pesosFalla;
    }
}

