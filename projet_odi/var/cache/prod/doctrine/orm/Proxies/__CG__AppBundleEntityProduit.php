<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Produit extends \AppBundle\Entity\Produit implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'ref_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'nom_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'description_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'categorie_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'quantite_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'quantite_min_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'prix_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'date_peremption_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'photo_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'visible_produit'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'ref_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'nom_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'description_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'categorie_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'quantite_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'quantite_min_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'prix_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'date_peremption_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'photo_produit', '' . "\0" . 'AppBundle\\Entity\\Produit' . "\0" . 'visible_produit'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Produit $proxy) {
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
    public function setNomProduit($nomProduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomProduit', [$nomProduit]);

        return parent::setNomProduit($nomProduit);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomProduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomProduit', []);

        return parent::getNomProduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionProduit($descriptionProduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionProduit', [$descriptionProduit]);

        return parent::setDescriptionProduit($descriptionProduit);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionProduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionProduit', []);

        return parent::getDescriptionProduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorieProduit($categorieProduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorieProduit', [$categorieProduit]);

        return parent::setCategorieProduit($categorieProduit);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorieProduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorieProduit', []);

        return parent::getCategorieProduit();
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
    public function setQuantiteMinProduit($quantiteMinProduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantiteMinProduit', [$quantiteMinProduit]);

        return parent::setQuantiteMinProduit($quantiteMinProduit);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantiteMinProduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantiteMinProduit', []);

        return parent::getQuantiteMinProduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixProduit($prixProduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixProduit', [$prixProduit]);

        return parent::setPrixProduit($prixProduit);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixProduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixProduit', []);

        return parent::getPrixProduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatePeremptionProduit($datePeremptionProduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatePeremptionProduit', [$datePeremptionProduit]);

        return parent::setDatePeremptionProduit($datePeremptionProduit);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatePeremptionProduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatePeremptionProduit', []);

        return parent::getDatePeremptionProduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhotoProduit($photoProduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhotoProduit', [$photoProduit]);

        return parent::setPhotoProduit($photoProduit);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhotoProduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhotoProduit', []);

        return parent::getPhotoProduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisibleProduit($visibleProduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisibleProduit', [$visibleProduit]);

        return parent::setVisibleProduit($visibleProduit);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisibleProduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisibleProduit', []);

        return parent::getVisibleProduit();
    }

}
