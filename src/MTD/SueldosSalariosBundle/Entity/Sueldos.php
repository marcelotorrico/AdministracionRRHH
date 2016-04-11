<?php

namespace MTD\SueldosSalariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var integer
     *
     * @ORM\Column(name="dias_mes", type="integer")
     */
    private $diasMes;

    /**
     * @var float
     *
     * @ORM\Column(name="dias_no_trabajados", nullable = true, type="float")
     */
    private $diasNoTrabajados;

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
     * @ORM\OneToMany(targetEntity="\MTD\AsistenciaBundle\Entity\Asistencia", mappedBy="sueldos")
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
     * @return Sueldos
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
     * Set diasNoTrabajados
     *
     * @param float $diasNoTrabajados
     *
     * @return Sueldos
     */
    public function setDiasNoTrabajados($diasNoTrabajados)
    {
        $this->diasNoTrabajados = $diasNoTrabajados;

        return $this;
    }

    /**
     * Get diasNoTrabajados
     *
     * @return float
     */
    public function getDiasNoTrabajados()
    {
        return $this->diasNoTrabajados;
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
}

