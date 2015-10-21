<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Product;

use Xidea\Product\ProductInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface ManagerInterface
{
    /**
     * Saves a product.
     * 
     * @param ProductInterface $product
     */
    function save(ProductInterface $product);

    /**
     * Updates a product.
     * 
     * @param ProductInterface $product
     */
    function update(ProductInterface $product);

    /**
     * Deletes a product.
     * 
     * @param ProductInterface $product
     */
    function delete(ProductInterface $product);
}
