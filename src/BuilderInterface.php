<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Product;

use Xidea\Product\ManufacturerInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface BuilderInterface
{
    /**
     * @return BuilderInterface
     */
    function create();
    
    /**
     * @param ManufacturerInterface $manufacturer
     * 
     * @return BuilderInterface
     */
    function setManufacturer(ManufacturerInterface $manufacturer);
    
    /**
     * @return \Xidea\Product\ProductInterface
     */
    function getProduct();
}
