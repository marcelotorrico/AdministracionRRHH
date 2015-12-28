<?php

namespace MTD\ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipo_Proyecto
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\ProyectoBundle\Entity\Tipo_ProyectoRepository")
 */
class Tipo_Proyecto
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
     * @ORM\OneToMany(targetEntity="Proyecto", mappedBy="tipo_proyecto")
     */
    private $proyecto;
    public function __construct()
    {
        $this->proyecto = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add proyecto
     *
     * @param \MTD\ProyectoBundle\Entity\Proyecto $proyecto
     *
     * @return Tipo_Proyecto
     */
    public function addProyecto(\MTD\ProyectoBundle\Entity\Proyecto $proyecto)
    {
        $this->proyecto[] = $proyecto;

        return $this;
    }

    /**
     * Remove proyecto
     *
     * @param \MTD\ProyectoBundle\Entity\Proyecto $proyecto
     */
    public function removeProyecto(\MTD\ProyectoBundle\Entity\Proyecto $proyecto)
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
     * @return Tipo_Proyecto
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
}
