<?php

namespace Proxies\__CG__\Sinett\MLAB\BuilderBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Template extends \Sinett\MLAB\BuilderBundle\Entity\Template implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'id', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'name', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'description', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'compatibleWith', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'app', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'groups', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'zip_file', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'apps', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'path', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'enabled', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'canDelete', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'group_names', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'version'];
        }

        return ['__isInitialized__', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'id', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'name', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'description', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'compatibleWith', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'app', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'groups', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'zip_file', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'apps', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'path', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'enabled', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'canDelete', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'group_names', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\Template' . "\0" . 'version'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Template $proxy) {
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
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompatibleWith($compatibleWith)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompatibleWith', [$compatibleWith]);

        return parent::setCompatibleWith($compatibleWith);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompatibleWith()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompatibleWith', []);

        return parent::getCompatibleWith();
    }

    /**
     * {@inheritDoc}
     */
    public function setApp(\Sinett\MLAB\BuilderBundle\Entity\App $app = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApp', [$app]);

        return parent::setApp($app);
    }

    /**
     * {@inheritDoc}
     */
    public function getApp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApp', []);

        return parent::getApp();
    }

    /**
     * {@inheritDoc}
     */
    public function addGroup(\Sinett\MLAB\BuilderBundle\Entity\Group $groups)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroup', [$groups]);

        return parent::addGroup($groups);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroup(\Sinett\MLAB\BuilderBundle\Entity\Group $groups)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroup', [$groups]);

        return parent::removeGroup($groups);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroups', []);

        return parent::getGroups();
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
    public function setZipFile(\Symfony\Component\HttpFoundation\File\UploadedFile $zip_file = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZipFile', [$zip_file]);

        return parent::setZipFile($zip_file);
    }

    /**
     * {@inheritDoc}
     */
    public function getZipFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZipFile', []);

        return parent::getZipFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setPath($path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPath', [$path]);

        return parent::setPath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', []);

        return parent::getPath();
    }

    /**
     * {@inheritDoc}
     */
    public function calculateFullPath($start_path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateFullPath', [$start_path]);

        return parent::calculateFullPath($start_path);
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
    public function setVersion($version)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVersion', [$version]);

        return parent::setVersion($version);
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersion', []);

        return parent::getVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function addApp(\Sinett\MLAB\BuilderBundle\Entity\App $apps)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addApp', [$apps]);

        return parent::addApp($apps);
    }

    /**
     * {@inheritDoc}
     */
    public function removeApp(\Sinett\MLAB\BuilderBundle\Entity\App $apps)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeApp', [$apps]);

        return parent::removeApp($apps);
    }

    /**
     * {@inheritDoc}
     */
    public function getApps()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApps', []);

        return parent::getApps();
    }

    /**
     * {@inheritDoc}
     */
    public function getArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArray', []);

        return parent::getArray();
    }

    /**
     * {@inheritDoc}
     */
    public function setCanDelete($canDelete)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCanDelete', [$canDelete]);

        return parent::setCanDelete($canDelete);
    }

    /**
     * {@inheritDoc}
     */
    public function getCanDelete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCanDelete', []);

        return parent::getCanDelete();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroupNames($names)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroupNames', [$names]);

        return parent::setGroupNames($names);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupNames()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupNames', []);

        return parent::getGroupNames();
    }

}
