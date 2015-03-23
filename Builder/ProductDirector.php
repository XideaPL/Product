<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Product\Builder;

use Xidea\Component\Product\Provider\AuthorProviderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class ProductDirector implements ProductDirectorInterface
{
    /*
     * @var ProductBuilderInterface
     */
    protected $productBuilder;
    
    /*
     * @var AuthorProviderInterface
     */
    protected $authorProvider;
    
    /**
     * 
     */
    public function __construct(ProductBuilderInterface $productBuilder, AuthorProviderInterface $authorProvider)
    {
        $this->productBuilder = $productBuilder;
        $this->authorProvider = $authorProvider;
    }
    
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $this->productBuilder->create();
        $this->productBuilder->setAuthor($this->authorProvider->provide());
        
        return $this->productBuilder->getProduct();
    }
}
