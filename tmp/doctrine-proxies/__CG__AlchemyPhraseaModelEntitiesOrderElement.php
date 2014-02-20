<?php

namespace Alchemy\Phrasea\Model\Proxies\__CG__\Alchemy\Phrasea\Model\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class OrderElement extends \Alchemy\Phrasea\Model\Entities\OrderElement implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'baseId', 'recordId', 'orderMaster', 'deny', 'order');
        }

        return array('__isInitialized__', 'id', 'baseId', 'recordId', 'orderMaster', 'deny', 'order');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (OrderElement $proxy) {
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
    public function setOrderMaster(\Alchemy\Phrasea\Model\Entities\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderMaster', array($user));

        return parent::setOrderMaster($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderMaster()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderMaster', array());

        return parent::getOrderMaster();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeny($deny)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeny', array($deny));

        return parent::setDeny($deny);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeny()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeny', array());

        return parent::getDeny();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrder(\Alchemy\Phrasea\Model\Entities\Order $order = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrder', array($order));

        return parent::setOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrder', array());

        return parent::getOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setBaseId($baseId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBaseId', array($baseId));

        return parent::setBaseId($baseId);
    }

    /**
     * {@inheritDoc}
     */
    public function getBaseId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBaseId', array());

        return parent::getBaseId();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecordId($recordId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecordId', array($recordId));

        return parent::setRecordId($recordId);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecordId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecordId', array());

        return parent::getRecordId();
    }

    /**
     * {@inheritDoc}
     */
    public function getRecord(\Alchemy\Phrasea\Application $app)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecord', array($app));

        return parent::getRecord($app);
    }

    /**
     * {@inheritDoc}
     */
    public function getSbasId(\Alchemy\Phrasea\Application $app)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSbasId', array($app));

        return parent::getSbasId($app);
    }

}
