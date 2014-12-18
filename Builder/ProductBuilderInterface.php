<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Product\Builder;

use Xidea\Component\Product\Model\AuthorInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface ProductBuilderInterface
{
    /**
     * @return void
     */
    function create();
    
    /**
     * @param UserInterface $author
     */
    function setAuthor(AuthorInterface $author);
    
    /**
     * @return \Xidea\Component\Product\Model\ProductInterface
     */
    function getProduct();
}
