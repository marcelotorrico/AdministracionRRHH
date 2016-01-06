<?php

namespace Proxies\__CG__\MTD\CategoriasTrabajoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Categoria extends \MTD\CategoriasTrabajoBundle\Entity\Categoria implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'id', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'nombre', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'sueldoBasico', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'viatico', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'premio', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'total', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'activo', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'proyecto', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'requisitoCategoria');
        }

        return array('__isInitialized__', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'id', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'nombre', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'sueldoBasico', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'viatico', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'premio', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'total', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'activo', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'proyecto', '' . "\0" . 'MTD\\CategoriasTrabajoBundle\\Entity\\Categoria' . "\0" . 'requisitoCategoria');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Categoria $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function addRequisitoCategoria(\MTD\CategoriasTrabajoBundle\Entity\Requisito_Categoria $requisitoCategoria)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRequisitoCategoria', array($requisitoCategoria));

        return parent::addRequisitoCategoria($requisitoCategoria);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRequisitoCategoria(\MTD\CategoriasTrabajoBundle\Entity\Requisito_Categoria $requisitoCategoria)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRequisitoCategoria', array($requisitoCategoria));

        return parent::removeRequisitoCategoria($requisitoCategoria);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequisitoCategoria()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequisitoCategoria', array());

        return parent::getRequisitoCategoria();
    }

    /**
     * {@inheritDoc}
     */
    public function addProyecto(\MTD\ProyectoBundle\Entity\Proyecto $proyecto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProyecto', array($proyecto));

        return parent::addProyecto($proyecto);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProyecto(\MTD\ProyectoBundle\Entity\Proyecto $proyecto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProyecto', array($proyecto));

        return parent::removeProyecto($proyecto);
    }

    /**
     * {@inheritDoc}
     */
    public function getProyecto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProyecto', array());

        return parent::getProyecto();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setSueldoBasico($sueldoBasico)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSueldoBasico', array($sueldoBasico));

        return parent::setSueldoBasico($sueldoBasico);
    }

    /**
     * {@inheritDoc}
     */
    public function getSueldoBasico()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSueldoBasico', array());

        return parent::getSueldoBasico();
    }

    /**
     * {@inheritDoc}
     */
    public function setViatico($viatico)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setViatico', array($viatico));

        return parent::setViatico($viatico);
    }

    /**
     * {@inheritDoc}
     */
    public function getViatico()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getViatico', array());

        return parent::getViatico();
    }

    /**
     * {@inheritDoc}
     */
    public function setPremio($premio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPremio', array($premio));

        return parent::setPremio($premio);
    }

    /**
     * {@inheritDoc}
     */
    public function getPremio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPremio', array());

        return parent::getPremio();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotal($total)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotal', array($total));

        return parent::setTotal($total);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotal', array());

        return parent::getTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivo($activo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivo', array($activo));

        return parent::setActivo($activo);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivo', array());

        return parent::getActivo();
    }

}
