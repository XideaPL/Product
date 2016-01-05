<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Product\Builder;

use Xidea\Base\Model\FactoryInterface;
use Xidea\Product\BuilderInterface;
use Xidea\Product\ManufacturerInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class DefaultBuilder implements BuilderInterface
{

    /**
     * Currently built product.
     *
     * @var \Xidea\Product\ProductInterface
     */
    protected $product;

    /**
     * Product factory.
     *
     * @var FactoryInterface
     */
    protected $factory;

    /**
     * 
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * {@inheritdoc}
     */
    public function create()
    {
        $this->product = $this->factory->create();
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setManufacturer(ManufacturerInterface $manufacturer)
    {
        $this->product->setManufacturer($manufacturer);
        
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getProduct()
    {
        return $this->product;
    }

}
