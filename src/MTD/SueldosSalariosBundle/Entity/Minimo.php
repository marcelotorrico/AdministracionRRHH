<?php

namespace MTD\SueldosSalariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Minimo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\SueldosSalariosBundle\Entity\MinimoRepository")
 */
class Minimo
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
     * @ORM\Column(name="valor", type="float")
     */
    private $valor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;

    /**
     * @ORM\OneToMany(targetEntity="\MTD\SueldosSalariosBundle\Entity\Sueldos", mappedBy="minimo")
     */
    private $sueldo;
    
    public function __construct()
    {
        $this->sueldo = new ArrayCollection();
    }
    
    /**
     * Add sueldo
     *
     * @param \MTD\SueldosSalariosBundle\Entity\Sueldos $sueldo
     *
     * @return Minimo
     */
    public function addSueldo(\MTD\SueldosSalariosBundle\Entity\Sueldos $sueldo)
    {
        $this->sueldo[] = $sueldo;

        return $this;
    }

    /**
     * Remove sueldo
     *
     * @param \MTD\SueldosSalariosBundle\Entity\Sueldos $sueldo
     */
    public function removeSueldo(\MTD\SueldosSalariosBundle\Entity\Sueldos $sueldo)
    {
        $this->sueldo->removeElement($sueldo);
    }

    /**
     * Get sueldo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
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
     * Set valor
     *
     * @param float $valor
     *
     * @return Minimo
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Minimo
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

