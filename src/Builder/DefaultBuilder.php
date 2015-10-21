<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Product\Builder;

use Xidea\Component\Base\Factory\ModelFactoryInterface;
use Xidea\Product\BuilderInterface;
use Xidea\Product\Manufacturer\ManufacturerInterface;

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
     * @var ModelFactoryInterface
     */
    protected $factory;

    /**
     * 
     * @param ModelFactoryInterface $productFactory
     */
    public function __construct(ModelFactoryInterface $productFactory)
    {
        $this->factory = $productFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function create()
    {
        $this->product = $this->factory->create();
    }
    
    /**
     * {@inheritdoc}
     */
    public function setManufacturer(ManufacturerInterface $manufacturer)
    {
        $this->product->setManufacturer($manufacturer);
    }

    /**
     * {@inheritdoc}
     */
    public function getProduct()
    {
        return $this->product;
    }

}
