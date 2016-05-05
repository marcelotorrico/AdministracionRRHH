<?php

namespace MTD\SueldosSalariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Antiguedad
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\SueldosSalariosBundle\Entity\AntiguedadRepository")
 */
class Antiguedad
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
     * @ORM\Column(name="año_nicio", type="integer")
     */
    private $añoInicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="año_fin", type="integer")
     */
    private $añoFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="porcentaje", type="float")
     */
    private $porcentaje;

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
     * Set añoInicio
     *
     * @param integer $añoInicio
     *
     * @return Antiguedad
     */
    public function setAñoInicio($añoInicio)
    {
        $this->añoInicio = $añoInicio;

        return $this;
    }

    /**
     * Get añoInicio
     *
     * @return integer
     */
    public function getAñoInicio()
    {
        return $this->añoInicio;
    }

    /**
     * Set añoFin
     *
     * @param integer $añoFin
     *
     * @return Antiguedad
     */
    public function setAñoFin($añoFin)
    {
        $this->añoFin = $añoFin;

        return $this;
    }

    /**
     * Get añoFin
     *
     * @return integer
     */
    public function getAñoFin()
    {
        return $this->añoFin;
    }

    /**
     * Set porcentaje
     *
     * @param integer $porcentaje
     *
     * @return Antiguedad
     */
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;

        return $this;
    }

    /**
     * Get porcentaje
     *
     * @return integer
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }
}