<?php

namespace MTD\CategoriasTrabajoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Requisito_Categoria
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\CategoriasTrabajoBundle\Entity\Requisito_CategoriaRepository")
 */
class Requisito_Categoria
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
     * @ORM\ManyToOne(targetEntity="Categoria", inversedBy="requisito_categoria")
     * @ORM\JoinColumn(name="id_categoria", referencedColumnName="id")
     * @return integer
     */
    private $categoria;
    public function setCategoria(\MTD\CategoriasTrabajoBundle\Entity\Categoria $categoria)
    {
        $this->categoria = $categoria;
    }

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
     * @return Requisito_Categoria
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

