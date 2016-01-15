<?php

namespace MTD\ReclutamientoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Empleado
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\ReclutamientoBundle\Entity\EmpleadoRepository")
 */
class Empleado
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
     * @ORM\Column(name="nombre", type="string", length=50)
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
     * @ORM\Column(name="apellido", type="string", length=50)
     * @Assert\NotNull(message="Debe escribir un apellido")
     * @Assert\Regex(
     *      pattern="/[A-Z]{1}[a-zñáéíóú]{2,20}\s?([A-Z]{1}[a-záéíóú]{2,20})?/",
     *      match=true
     * )
     */
    private $apellido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="date")
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", nullable=true, length=100)
     */
    private $lugar;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_civil", type="string", length=100)
     */
    private $estadoCivil;

    /**
     * @var integer
     *
     * @ORM\Column(name="dependientes", nullable=true, type="integer")
     */
    private $dependientes;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula_identidad", type="string", length=50)
     */
    private $cedulaIdentidad;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=100)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="zona", type="string", nullable=true, length=100)
     */
    private $zona;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_particular", type="string", nullable=true, length=50)
     * @Assert\Regex(
     *      pattern="/^(([4][0-9]{6,7}))$/",
     *      match=true
     * )
     */
    private $telefonoParticular;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_movil", type="string", nullable=true, length=50)
     * @Assert\Regex(
     *      pattern="/^(([7|6][0-9]{7}))$/",
     *      match=true
     * )
     */
    private $telefonoMovil;

    /**
     * @var string
     *
     * @ORM\Column(name="grado_escolaridad", type="string", nullable=true, length=100)
     */
    private $gradoEscolaridad;

    /**
     * @var string
     *
     * @ORM\Column(name="profesion", type="string", nullable=true, length=100)
     */
    private $profesion;

    /**
     * @var string
     *
     * @ORM\Column(name="otros_cursos", nullable=true, type="text")
     */
    private $otrosCursos;

    /**
     * @var string
     *
     * @ORM\Column(name="trabajos_anteriores", nullable=true, type="text")
     */
    private $trabajosAnteriores;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="contratado", type="boolean")
     */
    private $contratado;
    
    /**
     * @ORM\OneToMany(targetEntity="\MTD\ReclutamientoBundle\Entity\Empleado_Requisito", mappedBy="empleado")
     */
    private $empleadoRequisito;
    
    /**
     * @ORM\OneToMany(targetEntity="\MTD\SeleccionBundle\Entity\Contratacion", mappedBy="empleado")
     */
    private $contratacion;
    
    /**
     * @ORM\OneToMany(targetEntity="\MTD\SeleccionBundle\Entity\Proyecto_Empleado", mappedBy="empleado")
     */
    private $proyectoEmpleado;
    
    public function __construct()
    {
        $this->empleadoRequisito = new ArrayCollection();
        $this->contratacion = new ArrayCollection();
        $this->proyectoEmpleado = new ArrayCollection();
    }

    /**
     * Add proyectoEmpleado
     *
     * @param \MTD\SeleccionBundle\Entity\Proyecto_Empleado $proyectoEmpleado
     *
     * @return Empleado
     */
    public function addProyectoEmpleado(\MTD\SeleccionBundle\Entity\Proyecto_Empleado $proyectoEmpleado)
    {
        $this->proyectoEmpleado[] = $proyectoEmpleado;

        return $this;
    }

    /**
     * Remove proyectoEmpleado
     *
     * @param \MTD\SeleccionBundle\Entity\Proyecto_Empleado $proyectoEmpleado
     */
    public function removeProyectoEmpleado(\MTD\SeleccionBundle\Entity\Proyecto_Empleado $proyectoEmpleado)
    {
        $this->proyectoEmpleado->removeElement($proyectoEmpleado);
    }

    /**
     * Get proyectoEmpleado
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProyectoEmpleado()
    {
        return $this->proyectoEmpleado;
    }
    
    /**
     * Add contratacion
     *
     * @param \MTD\SeleccionBundle\Entity\Contratacion $contratacion
     *
     * @return Empleado
     */
    public function addContratacion(\MTD\SeleccionBundle\Entity\Contratacion $contratacion)
    {
        $this->contratacion[] = $contratacion;

        return $this;
    }

    /**
     * Remove contratacion
     *
     * @param \MTD\SeleccionBundle\Entity\Contratacion $contratacion
     */
    public function removeContratacion(\MTD\SeleccionBundle\Entity\Contratacion $contratacion)
    {
        $this->contratacion->removeElement($contratacion);
    }

    /**
     * Get contratacion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContratacion()
    {
        return $this->contratacion;
    }
    
    /**
     * Add empleadoRequisito
     *
     * @param \MTD\ReclutamientoBundle\Entity\Empleado_Requisito $empleadoRequisito
     *
     * @return Empleado
     */
    public function addEmpleadoRequisito(\MTD\ReclutamientoBundle\Entity\Empleado_Requisito $empleadoRequisito)
    {
        $this->empleadoRequisito[] = $empleadoRequisito;

        return $this;
    }

    /**
     * Remove empleadoRequisito
     *
     * @param \MTD\ReclutamientoBundle\Entity\Empleado_Requisito $empleadoRequisito
     */
    public function removeEmpleadoRequisito(\MTD\ReclutamientoBundle\Entity\Empleado_Requisito $empleadoRequisito)
    {
        $this->empleadoRequisito->removeElement($empleadoRequisito);
    }

    /**
     * Get empleadoRequisito
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmpleadoRequisito()
    {
        return $this->empleadoRequisito;
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
     * @return Empleado
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
     * @return Empleado
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
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Empleado
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     *
     * @return Empleado
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
     * Set estadoCivil
     *
     * @param string $estadoCivil
     *
     * @return Empleado
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;

        return $this;
    }

    /**
     * Get estadoCivil
     *
     * @return string
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set dependientes
     *
     * @param integer $dependientes
     *
     * @return Empleado
     */
    public function setDependientes($dependientes)
    {
        $this->dependientes = $dependientes;

        return $this;
    }

    /**
     * Get dependientes
     *
     * @return integer
     */
    public function getDependientes()
    {
        return $this->dependientes;
    }

    /**
     * Set cedulaIdentidad
     *
     * @param string $cedulaIdentidad
     *
     * @return Empleado
     */
    public function setCedulaIdentidad($cedulaIdentidad)
    {
        $this->cedulaIdentidad = $cedulaIdentidad;

        return $this;
    }

    /**
     * Get cedulaIdentidad
     *
     * @return string
     */
    public function getCedulaIdentidad()
    {
        return $this->cedulaIdentidad;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Empleado
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
     * Set zona
     *
     * @param string $zona
     *
     * @return Empleado
     */
    public function setZona($zona)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return string
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set telefonoParticular
     *
     * @param string $telefonoParticular
     *
     * @return Empleado
     */
    public function setTelefonoParticular($telefonoParticular)
    {
        $this->telefonoParticular = $telefonoParticular;

        return $this;
    }

    /**
     * Get telefonoParticular
     *
     * @return string
     */
    public function getTelefonoParticular()
    {
        return $this->telefonoParticular;
    }

    /**
     * Set telefonoMovil
     *
     * @param string $telefonoMovil
     *
     * @return Empleado
     */
    public function setTelefonoMovil($telefonoMovil)
    {
        $this->telefonoMovil = $telefonoMovil;

        return $this;
    }

    /**
     * Get telefonoMovil
     *
     * @return string
     */
    public function getTelefonoMovil()
    {
        return $this->telefonoMovil;
    }

    /**
     * Set gradoEscolaridad
     *
     * @param string $gradoEscolaridad
     *
     * @return Empleado
     */
    public function setGradoEscolaridad($gradoEscolaridad)
    {
        $this->gradoEscolaridad = $gradoEscolaridad;

        return $this;
    }

    /**
     * Get gradoEscolaridad
     *
     * @return string
     */
    public function getGradoEscolaridad()
    {
        return $this->gradoEscolaridad;
    }

    /**
     * Set profesion
     *
     * @param string $profesion
     *
     * @return Empleado
     */
    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;

        return $this;
    }

    /**
     * Get profesion
     *
     * @return string
     */
    public function getProfesion()
    {
        return $this->profesion;
    }

    /**
     * Set otrosCursos
     *
     * @param string $otrosCursos
     *
     * @return Empleado
     */
    public function setOtrosCursos($otrosCursos)
    {
        $this->otrosCursos = $otrosCursos;

        return $this;
    }

    /**
     * Get otrosCursos
     *
     * @return string
     */
    public function getOtrosCursos()
    {
        return $this->otrosCursos;
    }

    /**
     * Set trabajosAnteriores
     *
     * @param string $trabajosAnteriores
     *
     * @return Empleado
     */
    public function setTrabajosAnteriores($trabajosAnteriores)
    {
        $this->trabajosAnteriores = $trabajosAnteriores;

        return $this;
    }

    /**
     * Get trabajosAnteriores
     *
     * @return string
     */
    public function getTrabajosAnteriores()
    {
        return $this->trabajosAnteriores;
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
    
    /**
     * Set contratado
     *
     * @param boolean $contratado
     *
     * @return Proyecto
     */
    public function setContratado($contratado)
    {
        $this->contratado = $contratado;

        return $this;
    }

    /**
     * Get contratado
     *
     * @return boolean
     */
    public function getContratado()
    {
        return $this->contratado;
    }
}

