<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Product\Manager;

use Xidea\Component\Product\Model\ManufacturerInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface ManufacturerManagerInterface
{
    /**
     * Saves a manufacturer.
     * 
     * @param ManufacturerInterface $manufacturer
     */
    function save(ManufacturerInterface $manufacturer);

    /**
     * Updates a manufacturer.
     * 
     * @param ManufacturerInterface $manufacturer
     */
    function update(ManufacturerInterface $manufacturer);

    /**
     * Deletes a manufacturer.
     * 
     * @param ManufacturerInterface $manufacturer
     */
    function delete(ManufacturerInterface $manufacturer);
}
