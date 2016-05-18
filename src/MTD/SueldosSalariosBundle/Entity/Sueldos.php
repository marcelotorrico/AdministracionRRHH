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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso", nullable = true, type="date")
     */
    private $fechaIngreso;
    
    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", nullable = true, length=100)
     */
    private $categoria;
    
    /**
     * @var decimal
     *
     * @ORM\Column(name="sueldo_basico", type="decimal", nullable = true, scale=2)
     */
    private $sueldoBasico;
    
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
     * @ORM\Column(name="numero_horas_extras", nullable = true, type="float")
     */
    private $numeroHorasExtras;

    /**
     * @var float
     *
     * @ORM\Column(name="horas_extras", nullable = true, type="float")
     */
    private $horasExtras;

    /**
     * @var float
     *
     * @ORM\Column(name="porcentaje_antiguedad", nullable = true, type="float")
     */
    private $porcentajeAntiguedad;
    
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
     * @ORM\Column(name="liquido_pagable", nullable = true, type="float")
     */
    private $liquidoPagable;

    /**
     * @var float
     *
     * @ORM\Column(name="total_pagado", nullable = true, type="float")
     */
    private $totalPagado;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="emitido", nullable=true, type="boolean")
     */
    private $emitido;
    
    /**
     * @ORM\ManyToOne(targetEntity="\MTD\SueldosSalariosBundle\Entity\Minimo", inversedBy="sueldo")
     * @ORM\JoinColumn(name="id_minimo", referencedColumnName="id")
     * @return integer
     */
    private $minimo;
    public function setMinimo(\MTD\SueldosSalariosBundle\Entity\Minimo $minimo)
    {
        $this->minimo = $minimo;
    }

    public function getMinimo()
    {
        return $this->minimo;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="\MTD\SueldosSalariosBundle\Entity\Falla_Acumulada", mappedBy="sueldo")
     */
    private $fallaAcumulada;
    
    /**
     * @ORM\OneToMany(targetEntity="\MTD\SueldosSalariosBundle\Entity\Descuento", mappedBy="sueldo")
     */
    private $descuento;
    
    /**
     * @ORM\OneToMany(targetEntity="\MTD\SueldosSalariosBundle\Entity\Viatico", mappedBy="sueldo")
     */
    private $viatico;
    
    public function __construct()
    {
        $this->fallaAcumulada = new ArrayCollection();
        $this->descuento      = new ArrayCollection();
        $this->viatico        = new ArrayCollection();
    }
    
    /**
     * Add viatico
     *
     * @param \MTD\SueldosSalariosBundle\Entity\Viatico $viatico
     *
     * @return Sueldos
     */
    public function addViatico(\MTD\SueldosSalariosBundle\Entity\Viatico $viatico)
    {
        $this->viatico[] = $viatico;

        return $this;
    }

    /**
     * Remove viatico
     *
     * @param \MTD\SueldosSalariosBundle\Entity\Viatico $viatico
     */
    public function removeViatico(\MTD\SueldosSalariosBundle\Entity\Viatico $viatico)
    {
        $this->viatico->removeElement($viatico);
    }

    /**
     * Get viatico
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getViatico()
    {
        return $this->viatico;
    }
    
    /**
     * Add descuento
     *
     * @param \MTD\SueldosSalariosBundle\Entity\Descuento $descuento
     *
     * @return Sueldos
     */
    public function addDescuento(\MTD\SueldosSalariosBundle\Entity\Descuento $descuento)
    {
        $this->descuento[] = $descuento;

        return $this;
    }

    /**
     * Remove descuento
     *
     * @param \MTD\SueldosSalariosBundle\Entity\Descuento $descuento
     */
    public function removeDescuento(\MTD\SueldosSalariosBundle\Entity\Descuento $descuento)
    {
        $this->descuento->removeElement($descuento);
    }

    /**
     * Get descuento
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDescuento()
    {
        return $this->descuento;
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
     * Set numeroHorasExtras
     *
     * @param float $numeroHorasExtras
     *
     * @return Sueldos
     */
    public function setNumeroHorasExtras($numeroHorasExtras)
    {
        $this->numeroHorasExtras = $numeroHorasExtras;

        return $this;
    }

    /**
     * Get numeroHorasExtras
     *
     * @return float
     */
    public function getNumeroHorasExtras()
    {
        return $this->numeroHorasExtras;
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
     * Set porcentajeAntiguedad
     *
     * @param float $porcentajeAntiguedad
     *
     * @return Sueldos
     */
    public function setPorcentajeAntiguedad($porcentajeAntiguedad)
    {
        $this->porcentajeAntiguedad = $porcentajeAntiguedad;

        return $this;
    }

    /**
     * Get porcentajeAntiguedad
     *
     * @return float
     */
    public function getPorcentajeAntiguedad()
    {
        return $this->porcentajeAntiguedad;
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
     * @return Sueldos
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
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     *
     * @return Sueldos
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }
    
    /**
     * Set categoria
     *
     * @param string $categoria
     *
     * @return Sueldos
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
    
    /**
     * Set sueldoBasico
     *
     * @param float $sueldoBasico
     *
     * @return Sueldos
     */
    public function setSueldoBasico($sueldoBasico)
    {
        $this->sueldoBasico = $sueldoBasico;

        return $this;
    }

    /**
     * Get sueldoBasico
     *
     * @return float
     */
    public function getSueldoBasico()
    {
        return $this->sueldoBasico;
    }
    
    /**
     * Set emitido
     *
     * @param boolean $emitido
     *
     * @return Sueldos
     */
    public function setEmitido($emitido)
    {
        $this->emitido = $emitido;

        return $this;
    }

    /**
     * Get emitido
     *
     * @return boolean
     */
    public function getEmitido()
    {
        return $this->emitido;
    }
}

