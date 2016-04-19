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
     * @ORM\Column(name="total_dias_no_trabajados", nullable = true, type="float")
     */
    private $totalDiasNoTrabajados;

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
     * @ORM\OneToMany(targetEntity="\MTD\SueldosSalariosBundle\Entity\Dias_No_Trabajados", mappedBy="sueldos")
     */
    private $diasNoTrabajados;
    
    public function __construct()
    {
        $this->diasNoTrabajados = new ArrayCollection();
    }
    
    /**
     * Add diasNoTrabajados
     *
     * @param \MTD\SueldosSalariosBundle\Entity\Dias_No_Trabajados $diasNoTrabajados
     *
     * @return Sueldos
     */
    public function addDiasNoTrabajados(\MTD\SueldosSalariosBundle\Entity\Dias_No_Trabajados $diasNoTrabajados)
    {
        $this->diasNoTrabajados[] = $diasNoTrabajados;

        return $this;
    }

    /**
     * Remove diasNoTrabajados
     *
     * @param \MTD\SueldosSalariosBundle\Entity\Dias_No_Trabajados $diasNoTrabajados
     */
    public function removeDiasNoTrabajados(\MTD\SueldosSalariosBundle\Entity\Dias_No_Trabajados $diasNoTrabajados)
    {
        $this->sueldos->removeElement($diasNoTrabajados);
    }

    /**
     * Get diasNoTrabajados
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDiasNoTrabajados()
    {
        return $this->diasNoTrabajados;
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
     * Set totalDiasNoTrabajados
     *
     * @param float $totalDiasNoTrabajados
     *
     * @return Sueldos
     */
    public function setTotalDiasNoTrabajados($totalDiasNoTrabajados)
    {
        $this->totalDiasNoTrabajados = $totalDiasNoTrabajados;

        return $this;
    }

    /**
     * Get totalDiasNoTrabajados
     *
     * @return float
     */
    public function getTotalDiasNoTrabajados()
    {
        return $this->totalDiasNoTrabajados;
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

