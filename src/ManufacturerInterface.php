<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Product;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface ManufacturerInterface
{
    /**
     * Returns the id.
     * 
     * @return string The id
     */
    public function getId();

    /**
     * Sets the name.
     *
     * @param string $name
     */
    public function setName($name);
    
    /**
     * Returns the name.
     *
     * @return string
     */
    public function getName();
}
