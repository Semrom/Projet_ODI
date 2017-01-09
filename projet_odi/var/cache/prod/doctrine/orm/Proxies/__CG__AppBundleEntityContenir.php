<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Contenir extends \AppBundle\Entity\Contenir implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Contenir' . "\0" . 'id_panier', '' . "\0" . 'AppBundle\\Entity\\Contenir' . "\0" . 'ref_produit', '' . "\0" . 'AppBundle\\Entity\\Contenir' . "\0" . 'quantite_produit', '' . "\0" . 'AppBundle\\Entity\\Contenir' . "\0" . 'date_panier', '' . "\0" . 'AppBundle\\Entity\\Contenir' . "\0" . 'quantite_produit_geree'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Contenir' . "\0" . 'id_panier', '' . "\0" . 'AppBundle\\Entity\\Contenir' . "\0" . 'ref_produit', '' . "\0" . 'AppBundle\\Entity\\Contenir' . "\0" . 'quantite_produit', '' . "\0" . 'AppBundle\\Entity\\Contenir' . "\0" . 'date_panier', '' . "\0" . 'AppBundle\\Entity\\Contenir' . "\0" . 'quantite_produit_geree'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Contenir $proxy) {
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
    public function setIdPanier($idPanier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdPanier', [$idPanier]);

        return parent::setIdPanier($idPanier);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdPanier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdPanier', []);

        return parent::getIdPanier();
    }

    /**
     * {@inheritDoc}
     */
    public function setRefProduit($refProduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRefProduit', [$refProduit]);

        return parent::setRefProduit($refProduit);
    }

    /**
     * {@inheritDoc}
     */
    public function getRefProduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRefProduit', []);

        return parent::getRefProduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantiteProduit($quantiteProduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantiteProduit', [$quantiteProduit]);

        return parent::setQuantiteProduit($quantiteProduit);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantiteProduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantiteProduit', []);

        return parent::getQuantiteProduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatePanier($datePanier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatePanier', [$datePanier]);

        return parent::setDatePanier($datePanier);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatePanier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatePanier', []);

        return parent::getDatePanier();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantiteProduitGeree($quantiteProduitGeree)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantiteProduitGeree', [$quantiteProduitGeree]);

        return parent::setQuantiteProduitGeree($quantiteProduitGeree);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantiteProduitGeree()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantiteProduitGeree', []);

        return parent::getQuantiteProduitGeree();
    }

}
