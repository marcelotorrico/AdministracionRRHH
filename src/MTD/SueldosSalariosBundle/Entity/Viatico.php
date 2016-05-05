<?php

namespace MTD\SueldosSalariosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Viatico
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\SueldosSalariosBundle\Entity\ViaticoRepository")
 */
class Viatico
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
     * @ORM\Column(name="responsabilidad", type="float")
     */
    private $responsabilidad;

    /**
     * @var float
     *
     * @ORM\Column(name="diasViatico", type="float")
     */
    private $diasViatico;

    /**
     * @var float
     *
     * @ORM\Column(name="transporteViatico", type="float")
     */
    private $transporteViatico;

    /**
     * @ORM\ManyToOne(targetEntity="\MTD\SueldosSalariosBundle\Entity\Sueldos", inversedBy="viatico")
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
     * Set responsabilidad
     *
     * @param float $responsabilidad
     *
     * @return Viatico
     */
    public function setResponsabilidad($responsabilidad)
    {
        $this->responsabilidad = $responsabilidad;

        return $this;
    }

    /**
     * Get responsabilidad
     *
     * @return float
     */
    public function getResponsabilidad()
    {
        return $this->responsabilidad;
    }

    /**
     * Set diasViatico
     *
     * @param float $diasViatico
     *
     * @return Viatico
     */
    public function setDiasViatico($diasViatico)
    {
        $this->diasViatico = $diasViatico;

        return $this;
    }

    /**
     * Get diasViatico
     *
     * @return float
     */
    public function getDiasViatico()
    {
        return $this->diasViatico;
    }

    /**
     * Set transporteViatico
     *
     * @param float $transporteViatico
     *
     * @return Viatico
     */
    public function setTransporteViatico($transporteViatico)
    {
        $this->transporteViatico = $transporteViatico;

        return $this;
    }

    /**
     * Get transporteViatico
     *
     * @return float
     */
    public function getTransporteViatico()
    {
        return $this->transporteViatico;
    }
}

