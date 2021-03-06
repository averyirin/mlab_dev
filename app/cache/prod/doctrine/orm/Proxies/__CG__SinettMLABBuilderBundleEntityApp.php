<?php

namespace Proxies\__CG__\Sinett\MLAB\BuilderBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class App extends \Sinett\MLAB\BuilderBundle\Entity\App implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'id', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'name', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'path', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'description', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'keywords', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'active_version', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'appVersions', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'created', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'updated', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'template', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'user', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'updatedBy', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'groups', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'published', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'zip_file', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'icon_file', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'copy_app', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'splash_file', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'import_file', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'uid', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'tags', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'enabled'];
        }

        return ['__isInitialized__', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'id', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'name', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'path', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'description', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'keywords', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'active_version', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'appVersions', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'created', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'updated', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'template', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'user', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'updatedBy', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'groups', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'published', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'zip_file', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'icon_file', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'copy_app', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'splash_file', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'import_file', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'uid', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'tags', '' . "\0" . 'Sinett\\MLAB\\BuilderBundle\\Entity\\App' . "\0" . 'enabled'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (App $proxy) {
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
    public function setUid($uid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUid', [$uid]);

        return parent::setUid($uid);
    }

    /**
     * {@inheritDoc}
     */
    public function getUid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUid', []);

        return parent::getUid();
    }

    /**
     * {@inheritDoc}
     */
    public function setTags($tags)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTags', [$tags]);

        return parent::setTags($tags);
    }

    /**
     * {@inheritDoc}
     */
    public function getTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTags', []);

        return parent::getTags();
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
    public function generatePath($replace)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'generatePath', [$replace]);

        return parent::generatePath($replace);
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
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', []);

        return parent::getPath();
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
    public function setKeywords($keywords)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKeywords', [$keywords]);

        return parent::setKeywords($keywords);
    }

    /**
     * {@inheritDoc}
     */
    public function getKeywords()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKeywords', []);

        return parent::getKeywords();
    }

    /**
     * {@inheritDoc}
     */
    public function setActiveVersion($active_version)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActiveVersion', [$active_version]);

        return parent::setActiveVersion($active_version);
    }

    /**
     * {@inheritDoc}
     */
    public function getActiveVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActiveVersion', []);

        return parent::getActiveVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated($updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', [$updated]);

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', []);

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setTemplate(\Sinett\MLAB\BuilderBundle\Entity\Template $template = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTemplate', [$template]);

        return parent::setTemplate($template);
    }

    /**
     * {@inheritDoc}
     */
    public function getTemplate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemplate', []);

        return parent::getTemplate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Sinett\MLAB\BuilderBundle\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedBy(\Sinett\MLAB\BuilderBundle\Entity\User $updatedBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedBy', [$updatedBy]);

        return parent::setUpdatedBy($updatedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedBy', []);

        return parent::getUpdatedBy();
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
    public function setPublished($published)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublished', [$published]);

        return parent::setPublished($published);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublished', []);

        return parent::getPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function getArray($template_path = '')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArray', [$template_path]);

        return parent::getArray($template_path);
    }

    /**
     * {@inheritDoc}
     */
    public function getArrayFlat($template_path = '')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArrayFlat', [$template_path]);

        return parent::getArrayFlat($template_path);
    }

    /**
     * {@inheritDoc}
     */
    public function getVersionRange()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersionRange', []);

        return parent::getVersionRange();
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
    public function setIconFile($icon_file = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIconFile', [$icon_file]);

        return parent::setIconFile($icon_file);
    }

    /**
     * {@inheritDoc}
     */
    public function getIconFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIconFile', []);

        return parent::getIconFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setCopyApp($copy_app = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCopyApp', [$copy_app]);

        return parent::setCopyApp($copy_app);
    }

    /**
     * {@inheritDoc}
     */
    public function getCopyApp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCopyApp', []);

        return parent::getCopyApp();
    }

    /**
     * {@inheritDoc}
     */
    public function setSplashFile(\Symfony\Component\HttpFoundation\File\UploadedFile $splash_file = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSplashFile', [$splash_file]);

        return parent::setSplashFile($splash_file);
    }

    /**
     * {@inheritDoc}
     */
    public function getSplashFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSplashFile', []);

        return parent::getSplashFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setImportFile(\Symfony\Component\HttpFoundation\File\UploadedFile $import_file = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImportFile', [$import_file]);

        return parent::setImportFile($import_file);
    }

    /**
     * {@inheritDoc}
     */
    public function getImportFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImportFile', []);

        return parent::getImportFile();
    }

    /**
     * {@inheritDoc}
     */
    public function addAppVersion(\Sinett\MLAB\BuilderBundle\Entity\AppVersion $app_version)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAppVersion', [$app_version]);

        return parent::addAppVersion($app_version);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAppVersion(\Sinett\MLAB\BuilderBundle\Entity\AppVersion $app_version)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAppVersion', [$app_version]);

        return parent::removeAppVersion($app_version);
    }

    /**
     * {@inheritDoc}
     */
    public function getAppVersions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAppVersions', []);

        return parent::getAppVersions();
    }

    /**
     * {@inheritDoc}
     */
    public function setSingleAppVersion(\Sinett\MLAB\BuilderBundle\Entity\AppVersion $app_version)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSingleAppVersion', [$app_version]);

        return parent::setSingleAppVersion($app_version);
    }

}
