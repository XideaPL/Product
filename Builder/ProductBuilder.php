<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Product\Builder;

use Xidea\Component\Base\Factory\ModelFactoryInterface;
use Xidea\Component\Product\Model\ManufacturerInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class ProductBuilder implements ProductBuilderInterface
{

    /**
     * Currently built product.
     *
     * @var \Xidea\Component\Product\Model\ProductInterface
     */
    protected $product;

    /**
     * Product factory.
     *
     * @var ModelFactoryInterface
     */
    protected $factory;

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
