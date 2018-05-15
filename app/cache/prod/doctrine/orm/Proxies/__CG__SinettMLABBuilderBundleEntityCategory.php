<?php

namespace Proxies\__CG__\Sinett\MLAB\BuilderBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Category extends \Sinett\MLAB\BuilderBundle\Entity\Category implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'id', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'name', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'system', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'lft', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'rgt', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'root', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'lvl', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'children', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'parent', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'appsCategory1', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'appsCategory2', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'appsCategory3', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'usersCategory1', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'usersCategory2', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'usersCategory3', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'enabled'];
        }

        return ['__isInitialized__', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'id', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'name', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'system', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'lft', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'rgt', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'root', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'lvl', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'children', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'parent', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'appsCategory1', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'appsCategory2', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'appsCategory3', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'usersCategory1', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'usersCategory2', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'usersCategory3', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Category' . "\0" . 'enabled'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Category $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setSystem($system)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSystem', [$system]);

        return parent::setSystem($system);
    }

    /**
     * {@inheritDoc}
     */
    public function getSystem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSystem', []);

        return parent::getSystem();
    }

    /**
     * {@inheritDoc}
     */
    public function setLft($lft)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLft', [$lft]);

        return parent::setLft($lft);
    }

    /**
     * {@inheritDoc}
     */
    public function getLft()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLft', []);

        return parent::getLft();
    }

    /**
     * {@inheritDoc}
     */
    public function setRgt($rgt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRgt', [$rgt]);

        return parent::setRgt($rgt);
    }

    /**
     * {@inheritDoc}
     */
    public function getRgt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRgt', []);

        return parent::getRgt();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoot($root)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoot', [$root]);

        return parent::setRoot($root);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoot', []);

        return parent::getRoot();
    }

    /**
     * {@inheritDoc}
     */
    public function setLvl($lvl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLvl', [$lvl]);

        return parent::setLvl($lvl);
    }

    /**
     * {@inheritDoc}
     */
    public function getLvl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLvl', []);

        return parent::getLvl();
    }

    /**
     * {@inheritDoc}
     */
    public function addChildren(\Sinett\MLAB\BuilderBundle\Entity\Category $children)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChildren', [$children]);

        return parent::addChildren($children);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChildren(\Sinett\MLAB\BuilderBundle\Entity\Category $children)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChildren', [$children]);

        return parent::removeChildren($children);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', []);

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(\Sinett\MLAB\BuilderBundle\Entity\Category $parent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabled', []);

        return parent::getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function addAppsCategory1(\Sinett\MLAB\BuilderBundle\Entity\App $appsCategory1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAppsCategory1', [$appsCategory1]);

        return parent::addAppsCategory1($appsCategory1);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAppsCategory1(\Sinett\MLAB\BuilderBundle\Entity\App $appsCategory1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAppsCategory1', [$appsCategory1]);

        return parent::removeAppsCategory1($appsCategory1);
    }

    /**
     * {@inheritDoc}
     */
    public function getAppsCategory1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAppsCategory1', []);

        return parent::getAppsCategory1();
    }

    /**
     * {@inheritDoc}
     */
    public function addAppsCategory2(\Sinett\MLAB\BuilderBundle\Entity\App $appsCategory2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAppsCategory2', [$appsCategory2]);

        return parent::addAppsCategory2($appsCategory2);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAppsCategory2(\Sinett\MLAB\BuilderBundle\Entity\App $appsCategory2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAppsCategory2', [$appsCategory2]);

        return parent::removeAppsCategory2($appsCategory2);
    }

    /**
     * {@inheritDoc}
     */
    public function getAppsCategory2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAppsCategory2', []);

        return parent::getAppsCategory2();
    }

    /**
     * {@inheritDoc}
     */
    public function addAppsCategory3(\Sinett\MLAB\BuilderBundle\Entity\App $appsCategory3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAppsCategory3', [$appsCategory3]);

        return parent::addAppsCategory3($appsCategory3);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAppsCategory3(\Sinett\MLAB\BuilderBundle\Entity\App $appsCategory3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAppsCategory3', [$appsCategory3]);

        return parent::removeAppsCategory3($appsCategory3);
    }

    /**
     * {@inheritDoc}
     */
    public function getAppsCategory3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAppsCategory3', []);

        return parent::getAppsCategory3();
    }

    /**
     * {@inheritDoc}
     */
    public function addUsersCategory1(\Sinett\MLAB\BuilderBundle\Entity\User $usersCategory1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUsersCategory1', [$usersCategory1]);

        return parent::addUsersCategory1($usersCategory1);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUsersCategory1(\Sinett\MLAB\BuilderBundle\Entity\User $usersCategory1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUsersCategory1', [$usersCategory1]);

        return parent::removeUsersCategory1($usersCategory1);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsersCategory1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsersCategory1', []);

        return parent::getUsersCategory1();
    }

    /**
     * {@inheritDoc}
     */
    public function addUsersCategory2(\Sinett\MLAB\BuilderBundle\Entity\User $usersCategory2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUsersCategory2', [$usersCategory2]);

        return parent::addUsersCategory2($usersCategory2);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUsersCategory2(\Sinett\MLAB\BuilderBundle\Entity\User $usersCategory2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUsersCategory2', [$usersCategory2]);

        return parent::removeUsersCategory2($usersCategory2);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsersCategory2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsersCategory2', []);

        return parent::getUsersCategory2();
    }

    /**
     * {@inheritDoc}
     */
    public function addUsersCategory3(\Sinett\MLAB\BuilderBundle\Entity\User $usersCategory3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUsersCategory3', [$usersCategory3]);

        return parent::addUsersCategory3($usersCategory3);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUsersCategory3(\Sinett\MLAB\BuilderBundle\Entity\User $usersCategory3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUsersCategory3', [$usersCategory3]);

        return parent::removeUsersCategory3($usersCategory3);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsersCategory3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsersCategory3', []);

        return parent::getUsersCategory3();
    }

    /**
     * {@inheritDoc}
     */
    public function getIndentedName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIndentedName', []);

        return parent::getIndentedName();
    }

}
