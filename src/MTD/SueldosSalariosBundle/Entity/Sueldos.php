<?php

namespace MTD\SueldosSalariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Sueldos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\SueldosSalariosBundle\Entity\SueldosRepository")
 */
class Sueldos
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
     * @var integer
     *
     * @ORM\Column(name="dias_mes", nullable = true, type="integer")
     */
    private $diasMes;

    /**
     * @var float
     *
     * @ORM\Column(name="psgh", nullable = true, type="float")
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
     * @var float
     *
     * @ORM\Column(name="dias_trabajados", nullable = true, type="float")
     */
    private $diasTrabajados;

    /**
     * @var float
     *
     * @ORM\Column(name="horas_extras", nullable = true, type="float")
     */
    private $horasExtras;

    /**
     * @var float
     *
     * @ORM\Column(name="bono_antiguedad", nullable = true, type="float")
     */
    private $bonoAntiguedad;

    /**
     * @var float
     *
     * @ORM\Column(name="total_ganado", nullable = true, type="float")
     */
    private $totalGanado;

    /**
     * @var float
     *
     * @ORM\Column(name="descuentos", nullable = true, type="float")
     */
    private $descuentos;

    /**
     * @var float
     *
     * @ORM\Column(name="liquido_pagable", nullable = true, type="float")
     */
    private $liquidoPagable;

    /**
     * @var float
     *
     * @ORM\Column(name="premios_viaticos", nullable = true, type="float")
     */
    private $premiosViaticos;

    /**
     * @var float
     *
     * @ORM\Column(name="total_pagado", nullable = true, type="float")
     */
    private $totalPagado;
    
    /**
     * @ORM\OneToMany(targetEntity="\MTD\SueldosSalariosBundle\Entity\Falla_Acumulada", mappedBy="sueldo")
     */
    private $fallaAcumulada;
    
    public function __construct()
    {
        $this->fallaAcumulada = new ArrayCollection();
    }
    
    /**
     * Add fallaAcumulada
     *
     * @param \MTD\SueldosSalariosBundle\Entity\Falla_Acumulada $fallaAcumulada
     *
     * @return Sueldos
     */
    public function addFallaAcumulada(\MTD\SueldosSalariosBundle\Entity\Falla_Acumulada $fallaAcumulada)
    {
        $this->fallaAcumulada[] = $fallaAcumulada;

        return $this;
    }

    /**
     * Remove fallaAcumulada
     *
     * @param \MTD\SueldosSalariosBundle\Entity\Falla_Acumulada $fallaAcumulada
     */
    public function removeFallaAcumulada(\MTD\SueldosSalariosBundle\Entity\Falla_Acumulada $fallaAcumulada)
    {
        $this->fallaAcumulada->removeElement($fallaAcumulada);
    }

    /**
     * Get fallaAcumulada
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFallaAcumulada()
    {
        return $this->fallaAcumulada;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="\MTD\ReclutamientoBundle\Entity\Empleado", inversedBy="sueldos")
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
     * Set diasMes
     *
     * @param integer $diasMes
     *
     * @return Sueldos
     */
    public function setDiasMes($diasMes)
    {
        $this->diasMes = $diasMes;

        return $this;
    }

    /**
     * Get diasMes
     *
     * @return integer
     */
    public function getDiasMes()
    {
        return $this->diasMes;
    }

    /**
     * Set psgh
     *
     * @param float $psgh
     *
     * @return Sueldos
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
     * @return Sueldos
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
     * @return Sueldos
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
     * @return Sueldos
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
     * @return Sueldos
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

    /**
     * Set diasTrabajados
     *
     * @param float $diasTrabajados
     *
     * @return Sueldos
     */
    public function setDiasTrabajados($diasTrabajados)
    {
        $this->diasTrabajados = $diasTrabajados;

        return $this;
    }

    /**
     * Get diasTrabajados
     *
     * @return float
     */
    public function getDiasTrabajados()
    {
        return $this->diasTrabajados;
    }

    /**
     * Set horasExtras
     *
     * @param float $horasExtras
     *
     * @return Sueldos
     */
    public function setHorasExtras($horasExtras)
    {
        $this->horasExtras = $horasExtras;

        return $this;
    }

    /**
     * Get horasExtras
     *
     * @return float
     */
    public function getHorasExtras()
    {
        return $this->horasExtras;
    }

    /**
     * Set bonoAntiguedad
     *
     * @param float $bonoAntiguedad
     *
     * @return Sueldos
     */
    public function setBonoAntiguedad($bonoAntiguedad)
    {
        $this->bonoAntiguedad = $bonoAntiguedad;

        return $this;
    }

    /**
     * Get bonoAntiguedad
     *
     * @return float
     */
    public function getBonoAntiguedad()
    {
        return $this->bonoAntiguedad;
    }

    /**
     * Set totalGanado
     *
     * @param float $totalGanado
     *
     * @return Sueldos
     */
    public function setTotalGanado($totalGanado)
    {
        $this->totalGanado = $totalGanado;

        return $this;
    }

    /**
     * Get totalGanado
     *
     * @return float
     */
    public function getTotalGanado()
    {
        return $this->totalGanado;
    }

    /**
     * Set descuentos
     *
     * @param float $descuentos
     *
     * @return Sueldos
     */
    public function setDescuentos($descuentos)
    {
        $this->descuentos = $descuentos;

        return $this;
    }

    /**
     * Get descuentos
     *
     * @return float
     */
    public function getDescuentos()
    {
        return $this->descuentos;
    }

    /**
     * Set liquidoPagable
     *
     * @param float $liquidoPagable
     *
     * @return Sueldos
     */
    public function setLiquidoPagable($liquidoPagable)
    {
        $this->liquidoPagable = $liquidoPagable;

        return $this;
    }

    /**
     * Get liquidoPagable
     *
     * @return float
     */
    public function getLiquidoPagable()
    {
        return $this->liquidoPagable;
    }

    /**
     * Set premiosViaticos
     *
     * @param float $premiosViaticos
     *
     * @return Sueldos
     */
    public function setPremiosViaticos($premiosViaticos)
    {
        $this->premiosViaticos = $premiosViaticos;

        return $this;
    }

    /**
     * Get premiosViaticos
     *
     * @return float
     */
    public function getPremiosViaticos()
    {
        return $this->premiosViaticos;
    }

    /**
     * Set totalPagado
     *
     * @param float $totalPagado
     *
     * @return Sueldos
     */
    public function setTotalPagado($totalPagado)
    {
        $this->totalPagado = $totalPagado;

        return $this;
    }

    /**
     * Get totalPagado
     *
     * @return float
     */
    public function getTotalPagado()
    {
        return $this->totalPagado;
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
}

