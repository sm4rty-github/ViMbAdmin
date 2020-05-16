<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Admin extends \Entities\Admin implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'Entities\\Admin' . "\0" . 'username', '' . "\0" . 'Entities\\Admin' . "\0" . 'password', '' . "\0" . 'Entities\\Admin' . "\0" . 'super', '' . "\0" . 'Entities\\Admin' . "\0" . 'active', '' . "\0" . 'Entities\\Admin' . "\0" . 'created', '' . "\0" . 'Entities\\Admin' . "\0" . 'modified', '' . "\0" . 'Entities\\Admin' . "\0" . 'id', '' . "\0" . 'Entities\\Admin' . "\0" . 'Admin', '' . "\0" . 'Entities\\Admin' . "\0" . 'Logs', '' . "\0" . 'Entities\\Admin' . "\0" . 'Domains', '' . "\0" . 'Entities\\Admin' . "\0" . 'Preferences', '' . "\0" . 'Entities\\Admin' . "\0" . 'RememberMes', '' . "\0" . 'Entities\\Admin' . "\0" . 'Archives', '_className', '_preferenceClassName', '' . "\0" . 'Entities\\Admin' . "\0" . '_cache', '' . "\0" . 'Entities\\Admin' . "\0" . '_namespace'];
        }

        return ['__isInitialized__', '' . "\0" . 'Entities\\Admin' . "\0" . 'username', '' . "\0" . 'Entities\\Admin' . "\0" . 'password', '' . "\0" . 'Entities\\Admin' . "\0" . 'super', '' . "\0" . 'Entities\\Admin' . "\0" . 'active', '' . "\0" . 'Entities\\Admin' . "\0" . 'created', '' . "\0" . 'Entities\\Admin' . "\0" . 'modified', '' . "\0" . 'Entities\\Admin' . "\0" . 'id', '' . "\0" . 'Entities\\Admin' . "\0" . 'Admin', '' . "\0" . 'Entities\\Admin' . "\0" . 'Logs', '' . "\0" . 'Entities\\Admin' . "\0" . 'Domains', '' . "\0" . 'Entities\\Admin' . "\0" . 'Preferences', '' . "\0" . 'Entities\\Admin' . "\0" . 'RememberMes', '' . "\0" . 'Entities\\Admin' . "\0" . 'Archives', '_className', '_preferenceClassName', '' . "\0" . 'Entities\\Admin' . "\0" . '_cache', '' . "\0" . 'Entities\\Admin' . "\0" . '_namespace'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Admin $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getFormattedName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormattedName', []);

        return parent::getFormattedName();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setSuper($super)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuper', [$super]);

        return parent::setSuper($super);
    }

    /**
     * {@inheritDoc}
     */
    public function getSuper()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSuper', []);

        return parent::getSuper();
    }

    /**
     * {@inheritDoc}
     */
    public function isSuper()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSuper', []);

        return parent::isSuper();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', []);

        return parent::getActive();
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
    public function setModified($modified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModified', [$modified]);

        return parent::setModified($modified);
    }

    /**
     * {@inheritDoc}
     */
    public function getModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModified', []);

        return parent::getModified();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function addAdmin(\Entities\AdminPreference $admin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAdmin', [$admin]);

        return parent::addAdmin($admin);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdmin(\Entities\AdminPreference $admin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdmin', [$admin]);

        return parent::removeAdmin($admin);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdmin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdmin', []);

        return parent::getAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function addLog(\Entities\Log $logs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLog', [$logs]);

        return parent::addLog($logs);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLog(\Entities\Log $logs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLog', [$logs]);

        return parent::removeLog($logs);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogs', []);

        return parent::getLogs();
    }

    /**
     * {@inheritDoc}
     */
    public function addDomain(\Entities\Domain $domains)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDomain', [$domains]);

        return parent::addDomain($domains);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDomain(\Entities\Domain $domains)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDomain', [$domains]);

        return parent::removeDomain($domains);
    }

    /**
     * {@inheritDoc}
     */
    public function getDomains()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDomains', []);

        return parent::getDomains();
    }

    /**
     * {@inheritDoc}
     */
    public function addPreference(\Entities\AdminPreference $preferences)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPreference', [$preferences]);

        return parent::addPreference($preferences);
    }

    /**
     * {@inheritDoc}
     */
    public function removePreference(\Entities\AdminPreference $preferences)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePreference', [$preferences]);

        return parent::removePreference($preferences);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreferences()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreferences', []);

        return parent::getPreferences();
    }

    /**
     * {@inheritDoc}
     */
    public function canManageDomain($domain)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'canManageDomain', [$domain]);

        return parent::canManageDomain($domain);
    }

    /**
     * {@inheritDoc}
     */
    public function addAdminPreference(\Entities\AdminPreference $preferences)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAdminPreference', [$preferences]);

        return parent::addAdminPreference($preferences);
    }

    /**
     * {@inheritDoc}
     */
    public function addRememberMe(\Entities\RememberMe $rememberMes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRememberMe', [$rememberMes]);

        return parent::addRememberMe($rememberMes);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRememberMe(\Entities\RememberMe $rememberMes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRememberMe', [$rememberMes]);

        return parent::removeRememberMe($rememberMes);
    }

    /**
     * {@inheritDoc}
     */
    public function getRememberMes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRememberMes', []);

        return parent::getRememberMes();
    }

    /**
     * {@inheritDoc}
     */
    public function addArchive(\Entities\Archive $archives)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addArchive', [$archives]);

        return parent::addArchive($archives);
    }

    /**
     * {@inheritDoc}
     */
    public function removeArchive(\Entities\Archive $archives)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeArchive', [$archives]);

        return parent::removeArchive($archives);
    }

    /**
     * {@inheritDoc}
     */
    public function getArchives()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchives', []);

        return parent::getArchives();
    }

    /**
     * {@inheritDoc}
     */
    public function loadPreference($attribute, $index = 0, $includeExpired = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'loadPreference', [$attribute, $index, $includeExpired]);

        return parent::loadPreference($attribute, $index, $includeExpired);
    }

    /**
     * {@inheritDoc}
     */
    public function hasPreference($attribute, $index = 0, $includeExpired = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasPreference', [$attribute, $index, $includeExpired]);

        return parent::hasPreference($attribute, $index, $includeExpired);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreference($attribute, $index = 0, $includeExpired = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreference', [$attribute, $index, $includeExpired]);

        return parent::getPreference($attribute, $index, $includeExpired);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreference($attribute, $value, $operator = '=', $expires = 0, $index = 0)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreference', [$attribute, $value, $operator, $expires, $index]);

        return parent::setPreference($attribute, $value, $operator, $expires, $index);
    }

    /**
     * {@inheritDoc}
     */
    public function addIndexedPreference($attribute, $value, $operator = '=', $expires = 0, $max = 0)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIndexedPreference', [$attribute, $value, $operator, $expires, $max]);

        return parent::addIndexedPreference($attribute, $value, $operator, $expires, $max);
    }

    /**
     * {@inheritDoc}
     */
    public function cleanExpiredPreferences($asOf = NULL, $attribute = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'cleanExpiredPreferences', [$asOf, $attribute]);

        return parent::cleanExpiredPreferences($asOf, $attribute);
    }

    /**
     * {@inheritDoc}
     */
    public function deletePreference($attribute, $index = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'deletePreference', [$attribute, $index]);

        return parent::deletePreference($attribute, $index);
    }

    /**
     * {@inheritDoc}
     */
    public function expungePreferences()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'expungePreferences', []);

        return parent::expungePreferences();
    }

    /**
     * {@inheritDoc}
     */
    public function getIndexedPreference($attribute, $withIndex = false, $ignoreExpired = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIndexedPreference', [$attribute, $withIndex, $ignoreExpired]);

        return parent::getIndexedPreference($attribute, $withIndex, $ignoreExpired);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssocPreference($attribute, $index = NULL, $ignoreExpired = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssocPreference', [$attribute, $index, $ignoreExpired]);

        return parent::getAssocPreference($attribute, $index, $ignoreExpired);
    }

    /**
     * {@inheritDoc}
     */
    public function deleteAssocPreference($attribute, $index = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'deleteAssocPreference', [$attribute, $index]);

        return parent::deleteAssocPreference($attribute, $index);
    }

    /**
     * {@inheritDoc}
     */
    public function _getPreferences()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_getPreferences', []);

        return parent::_getPreferences();
    }

}
