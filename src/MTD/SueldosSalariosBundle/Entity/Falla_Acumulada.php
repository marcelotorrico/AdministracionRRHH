<?php

namespace MTD\SueldosSalariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Falla_Acumulada
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\SueldosSalariosBundle\Entity\Falla_AcumuladaRepository")
 */
class Falla_Acumulada
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
     * @ORM\Column(name="ano",nullable = true, type="integer")
     */
    private $año;

    /**
     * @var integer
     *
     * @ORM\Column(name="semana",nullable = true, type="integer")
     */
    private $semana;

    /**
     * @var integer
     *
     * @ORM\Column(name="permiso", type="integer")
     */
    private $permiso;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="falta", type="integer")
     */
    private $falta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;

    /**
     * @ORM\ManyToOne(targetEntity="\MTD\SueldosSalariosBundle\Entity\Sueldos", inversedBy="falla_acumulada")
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
     * Set año
     *
     * @param integer $año
     *
     * @return Falla_Acumulada
     */
    public function setAño($año)
    {
        $this->año = $año;

        return $this;
    }

    /**
     * Get año
     *
     * @return integer
     */
    public function getAño()
    {
        return $this->año;
    }

    /**
     * Set semana
     *
     * @param integer $semana
     *
     * @return Falla_Acumulada
     */
    public function setSemana($semana)
    {
        $this->semana = $semana;

        return $this;
    }

    /**
     * Get semana
     *
     * @return integer
     */
    public function getSemana()
    {
        return $this->semana;
    }

    /**
     * Set permiso
     *
     * @param integer $permiso
     *
     * @return Falla_Acumulada
     */
    public function setPermiso($permiso)
    {
        $this->permiso = $permiso;

        return $this;
    }

    /**
     * Get permiso
     *
     * @return integer
     */
    public function getPermiso()
    {
        return $this->permiso;
    }
    
    /**
     * Set falta
     *
     * @param integer $falta
     *
     * @return Falla_Acumulada
     */
    public function setFalta($falta)
    {
        $this->falta = $falta;

        return $this;
    }

    /**
     * Get falta
     *
     * @return integer
     */
    public function getFalta()
    {
        return $this->falta;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Falla_Acumulada
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

