<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Product\Builder;

use Xidea\Product\DirectorInterface;
use Xidea\Product\BuilderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class DefaultDirector implements DirectorInterface
{
    /*
     * @var BuilderInterface
     */
    protected $productBuilder;
    
    /**
     * 
     */
    public function __construct(BuilderInterface $productBuilder)
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
