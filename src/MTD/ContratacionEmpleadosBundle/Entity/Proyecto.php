<?php

namespace MTD\ContratacionEmpleadosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Proyecto
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\ContratacionEmpleadosBundle\Entity\ProyectoRepository")
 */
class Proyecto
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
     * @var string
     *
     * @ORM\Column(name="monto_contrato", type="string", length=100)
     */
    private $montoContrato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="plazo_entrega", type="date")
     */
    private $plazoEntrega;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=100)
     */
    private $lugar;

    /**
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="proyecto")
     * @ORM\JoinColumn(name="id_cliente", referencedColumnName="id")
     * @return integer
     */
    private $cliente;
    public function setCliente(\MTD\ContratacionEmpleadosBundle\Entity\Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Tipo_Proyecto", inversedBy="proyecto")
     * @ORM\JoinColumn(name="id_tipo_proyecto", referencedColumnName="id")
     * @return integer
     */
    private $tipoProyecto;
    public function setTipoProyecto(\MTD\ContratacionEmpleadosBundle\Entity\Tipo_Proyecto $tipoProyecto)
    {
        $this->tipoProyecto = $tipoProyecto;
    }

    public function getTipoProyecto()
    {
        return $this->tipoProyecto;
    }
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;
    
    /**
     * @ORM\ManyToMany(targetEntity="MTD\CategoriasTrabajoBundle\Entity\Categoria", mappedBy="proyecto")
     * @ORM\JoinTable(name="proyecto_categoria")
     * 
     */
     private $categoria;

     public function __construct()
     {
         $this->categoria = new ArrayCollection();
     }
     
     /**
     * Add categoria
     *
     * @param \MTD\CategoriasTrabajoBundle\Entity\Categoria $categoria
     * @return Proyecto
     */
    public function addCategoria(\MTD\CategoriasTrabajoBundle\Entity\Categoria $categoria)
    {
        $this->categoria[] = $categoria;
        return $this;
    }

    /**
     * Remove categoria
     *
     * @param \MTD\CategoriasTrabajoBundle\Entity\Categoria $categoria
     */
    public function removeCategoria(\MTD\CategoriasTrabajoBundle\Entity\Categoria $categoria)
    {
        $this->categoria->removeElement($categoria);
    }

    /**
     * Get categoria
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategoria()
    {
        return $this->categoria;
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
     * @return Proyecto
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
     * Set montoContrato
     *
     * @param string $montoContrato
     *
     * @return Proyecto
     */
    public function setMontoContrato($montoContrato)
    {
        $this->montoContrato = $montoContrato;

        return $this;
    }

    /**
     * Get montoContrato
     *
     * @return string
     */
    public function getMontoContrato()
    {
        return $this->montoContrato;
    }

    /**
     * Set plazoEntrega
     *
     * @param \DateTime $plazoEntrega
     *
     * @return Proyecto
     */
    public function setPlazoEntrega($plazoEntrega)
    {
        $this->plazoEntrega = $plazoEntrega;

        return $this;
    }

    /**
     * Get plazoEntrega
     *
     * @return \DateTime
     */
    public function getPlazoEntrega()
    {
        return $this->plazoEntrega;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     *
     * @return Proyecto
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
    }
    
    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Proyecto
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
