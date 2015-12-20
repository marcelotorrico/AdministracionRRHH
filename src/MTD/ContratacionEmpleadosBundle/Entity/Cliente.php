<?php

namespace MTD\ContratacionEmpleadosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cliente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\ContratacionEmpleadosBundle\Entity\ClienteRepository")
 */
class Cliente
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
     * @Assert\NotNull(message="Debe escribir un nombre")
     * @Assert\Regex(
     *      pattern="/[A-Z]{1}[a-zñáéíóú]{2,20}$/",
     *      match=true
     * )
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=100)
     * @Assert\NotNull(message="Debe escribir un apellido")
     * @Assert\Regex(
     *      pattern="/[A-Z]{1}[a-zñáéíóú]{2,20}\s?([A-Z]{1}[a-záéíóú]{2,20})?/",
     *      match=true
     * )
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=100)
     * @Assert\NotNull(message="Debe escribir una direccion")
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=100)
     * @Assert\NotNull(message="Debe escribir un telefono")
     * @Assert\Length(
     *      min = "7",
     *      max = "8",
     *      minMessage = "Tu numero de telefono por lo menos debe tener {{ limit }} digitos",
     *      maxMessage = "Tu numero de telefono no puede tener más de {{ limit }} digitos"
     * )
     * @Assert\Regex(
     *      pattern="/^(([4][0-9]{6,7})|([7|6][0-9]{7}))$/",
     *      match=true
     * )
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="nit", type="string", length=100)
     * @Assert\NotNull(message="Debe escribir un NIT")
     */
    private $nit;

    /**
     * @var string
     *
     * @ORM\Column(name="banco", type="string",nullable=true, length=100)
     */
    private $banco;

    /**
     * @ORM\OneToMany(targetEntity="Proyecto", mappedBy="cliente")
     */
    private $proyecto;
    public function __construct()
    {
        $this->proyecto = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add proyecto
     *
     * @param \MTD\ContratacionEmpleadosBundle\Entity\Proyecto $proyecto
     *
     * @return Cliente
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
     * @return Cliente
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
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Cliente
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Cliente
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Cliente
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set nit
     *
     * @param string $nit
     *
     * @return Cliente
     */
    public function setNit($nit)
    {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get nit
     *
     * @return string
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set banco
     *
     * @param string $banco
     *
     * @return Cliente
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Get banco
     *
     * @return string
     */
    public function getBanco()
    {
        return $this->banco;
    }
    
    public function nombreCompleto()
    {
        $nombreCompleto = $this->nombre." ".$this->apellido;
        return $nombreCompleto;
    }

}
