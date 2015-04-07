<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Product\Model;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
abstract class AbstractProduct implements ProductInterface
{
    /*
     * @var int
     */
    protected $id;
    
    /*
     * @var string
     */
    protected $sku;
    
    /*
     * @var string
     */
    protected $name;
    
    /*
     * @var string
     */
    protected $description;
    
    /*
     * @var ManufacturerInterface
     */
    protected $manufacturer;
    
    /*
     * @var datetime
     */
    protected $createdAt;
    
    /*
     * @var datetime
     */
    protected $updatedAt;
    
    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @inheritDoc
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }
    
    /**
     * @inheritDoc
     */
    public function getSku()
    {
        return $this->sku;
    }
    
    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @inheritDoc
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * @inheritDoc
     */
    public function setManufacturer(ManufacturerInterface $manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @inheritDoc
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt(\DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;
    }
    
    /**
     * @inheritDoc
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /**
     * @inheritDoc
     */
    public function setUpdatedAt(\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
