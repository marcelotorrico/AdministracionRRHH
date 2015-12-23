<?php

namespace MTD\CategoriasTrabajoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Categoria
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\CategoriasTrabajoBundle\Entity\CategoriaRepository")
 */
class Categoria
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
     * @var decimal
     *
     * @ORM\Column(name="sueldo_basico", type="decimal", scale=2)
     * @Assert\NotNull(message="Debe escribir el sueldo basico")
     * @Assert\Regex(
     *      pattern="/^(([0-9]{0,7})((\.)?[0-9]{1,2}))$/",
     *      match=true
     * )
     */
    private $sueldoBasico;

    /**
     * @var decimal
     *
     * @ORM\Column(name="viatico", type="decimal", scale=2)
     * @Assert\NotNull(message="Debe escribir el monto del viatico")
     * @Assert\Regex(
     *      pattern="/^(([0-9]{0,7})((\.)?[0-9]{1,2}))$/",
     *      match=true
     * )
     */
    private $viatico;

    /**
     * @var decimal
     *
     * @ORM\Column(name="premio", type="decimal", scale=2)
     * @Assert\NotNull(message="Debe escribir el monto del premio")
     * @Assert\Regex(
     *      pattern="/^(([0-9]{0,7})((\.)?[0-9]{1,2}))$/",
     *      match=true
     * )
     */
    private $premio;

    /**
     * @var decimal
     *
     * @ORM\Column(name="total", type="decimal", scale=2)
     */
    private $total;

    /**
     * @ORM\ManyToMany(targetEntity="MTD\ContratacionEmpleadosBundle\Entity\Proyecto", inversedBy="categoria")
     */
     private $proyecto;
     
     /**
     * @ORM\OneToMany(targetEntity="Requisito_Categoria", mappedBy="categoria")
     */
    private $requisitCategoria;
     
     public function __construct()
    {
        $this->proyecto  = new ArrayCollection();
        $this->requisitCategoria = new ArrayCollection();
    }
    
    /**
     * Add requisitCategoria
     *
     * @param \MTD\CategoriasTrabajoBundle\Entity\Requisito_Categoria $requisitoCategoria
     *
     * @return Categoria
     */
    public function addRequisitoCategoria(\MTD\CategoriasTrabajoBundle\Entity\Requisito_Categoria $requisitoCategoria)
    {
        $this->requisitCategoria[] = $requisitoCategoria;

        return $this;
    }

    /**
     * Remove requisitoCategoria
     *
     * @param \MTD\CategoriasTrabajoBundle\Entity\Requisito_Categoria $requisitoCategoria
     */
    public function removeRequisitoCategoria(\MTD\CategoriasTrabajoBundle\Entity\Requisito_Categoria $requisitoCategoria)
    {
        $this->requisitoCategoria->removeElement($requisitoCategoria);
    }

    /**
     * Get requisitoCategoria
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRequisitoCategoria()
    {
        return $this->requisitCategoria;
    }
    
    /**
     * Add proyecto
     *
     * @param \MTD\ContratacionEmpleadosBundle\Entity\Proyecto $proyecto
     *
     * @return Categoria
     */
    public function addProyecto(\MTD\ContratacionEmpleadosBundle\Entity\Proyecto $proyecto)
    {
        $this->proyecto[] = $proyecto;

        return $this;
    }

    /**
     * Remove proyecto
     *
     * @param \MTD\ContratacionEmpleadosBundle\Entity\Proyecto $proyecto
     */
    public function removeProyecto(\MTD\ContratacionEmpleadosBundle\Entity\Proyecto $proyecto)
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
     * @return Categoria
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

    /**
     * Set sueldoBasico
     *
     * @param float $sueldoBasico
     *
     * @return Categoria
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
     * Set viatico
     *
     * @param float $viatico
     *
     * @return Categoria
     */
    public function setViatico($viatico)
    {
        $this->viatico = $viatico;

        return $this;
    }

    /**
     * Get viatico
     *
     * @return float
     */
    public function getViatico()
    {
        return $this->viatico;
    }

    /**
     * Set premio
     *
     * @param float $premio
     *
     * @return Categoria
     */
    public function setPremio($premio)
    {
        $this->premio = $premio;

        return $this;
    }

    /**
     * Get premio
     *
     * @return float
     */
    public function getPremio()
    {
        return $this->premio;
    }

    /**
     * Set total
     *
     * @param float $total
     *
     * @return Categoria
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }
}

