<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Product\Builder;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class ProductDirector implements ProductDirectorInterface
{
    /*
     * @var ProductBuilderInterface
     */
    protected $productBuilder;
    
    /**
     * 
     */
    public function __construct(ProductBuilderInterface $productBuilder)
    {
        $this->productBuilder = $productBuilder;
    }
    
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $this->productBuilder->create();
        
        return $this->productBuilder->getProduct();
    }
}
