<?php

namespace MTD\SueldosSalariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Descuento
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\SueldosSalariosBundle\Entity\DescuentoRepository")
 */
class Descuento
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
     * @ORM\Column(name="afps", nullable = true, type="float")
     */
    private $afps;

    /**
     * @var float
     *
     * @ORM\Column(name="anticipo", nullable = true, type="float")
     */
    private $anticipo;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;

    /**
     * @ORM\ManyToOne(targetEntity="\MTD\SueldosSalariosBundle\Entity\Sueldos", inversedBy="descuento")
     * @ORM\JoinColumn(name="id_sueldo", referencedColumnName="id")
     * @return integer
     */
    private $sueldo;
    public function setSueldo(\MTD\SueldosSalariosBundle\Entity\Sueldos $sueldo)
    {
        $this->sueldo = $sueldo;
    }

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
     * Set afps
     *
     * @param float $afps
     *
     * @return Descuento
     */
    public function setAfps($afps)
    {
        $this->afps = $afps;

        return $this;
    }

    /**
     * Get afps
     *
     * @return float
     */
    public function getAfps()
    {
        return $this->afps;
    }

    /**
     * Set anticipo
     *
     * @param float $anticipo
     *
     * @return Descuento
     */
    public function setAnticipo($anticipo)
    {
        $this->anticipo = $anticipo;

        return $this;
    }

    /**
     * Get anticipo
     *
     * @return float
     */
    public function getAnticipo()
    {
        return $this->anticipo;
    }
    
    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Descuento
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

