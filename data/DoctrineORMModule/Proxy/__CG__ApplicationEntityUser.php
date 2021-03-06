<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \Application\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'inputFilter', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userId', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userLogin', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userEmail', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userName', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userPassword', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userRegisterDate', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userLastLogin', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userIp', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userProfile', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userBlocked');
        }

        return array('__isInitialized__', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'inputFilter', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userId', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userLogin', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userEmail', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userName', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userPassword', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userRegisterDate', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userLastLogin', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userIp', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userProfile', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userBlocked');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function setInputFilter(\Zend\InputFilter\InputFilterInterface $inputFilter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInputFilter', array($inputFilter));

        return parent::setInputFilter($inputFilter);
    }

    /**
     * {@inheritDoc}
     */
    public function getInputFilter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInputFilter', array());

        return parent::getInputFilter();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getUserId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserId', array());

        return parent::getUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserLogin', array());

        return parent::getUserLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserEmail', array());

        return parent::getUserEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserName', array());

        return parent::getUserName();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserPassword', array());

        return parent::getUserPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserRegisterDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserRegisterDate', array());

        return parent::getUserRegisterDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserLastLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserLastLogin', array());

        return parent::getUserLastLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIp', array());

        return parent::getUserIp();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserProfile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserProfile', array());

        return parent::getUserProfile();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserId($userId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserId', array($userId));

        return parent::setUserId($userId);
    }

    /**
     * {@inheritDoc}
     */
    public function setUserLogin($userLogin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserLogin', array($userLogin));

        return parent::setUserLogin($userLogin);
    }

    /**
     * {@inheritDoc}
     */
    public function setUserEmail($userEmail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserEmail', array($userEmail));

        return parent::setUserEmail($userEmail);
    }

    /**
     * {@inheritDoc}
     */
    public function setUserName($userName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserName', array($userName));

        return parent::setUserName($userName);
    }

    /**
     * {@inheritDoc}
     */
    public function setUserPassword($userPassword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserPassword', array($userPassword));

        return parent::setUserPassword($userPassword);
    }

    /**
     * {@inheritDoc}
     */
    public function setUserRegisterDate($userRegisterDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserRegisterDate', array($userRegisterDate));

        return parent::setUserRegisterDate($userRegisterDate);
    }

    /**
     * {@inheritDoc}
     */
    public function setUserLastLogin($userLastLogin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserLastLogin', array($userLastLogin));

        return parent::setUserLastLogin($userLastLogin);
    }

    /**
     * {@inheritDoc}
     */
    public function setUserIp($userIp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserIp', array($userIp));

        return parent::setUserIp($userIp);
    }

    /**
     * {@inheritDoc}
     */
    public function setUserProfile($userProfile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserProfile', array($userProfile));

        return parent::setUserProfile($userProfile);
    }

    /**
     * {@inheritDoc}
     */
    public function setUserBlocked($blocked)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserBlocked', array($blocked));

        return parent::setUserBlocked($blocked);
    }

    /**
     * {@inheritDoc}
     */
    public function isUserBlocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isUserBlocked', array());

        return parent::isUserBlocked();
    }

}
