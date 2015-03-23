<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Product\Manager;

use Xidea\Component\Product\Model\PartnerInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface PartnerManagerInterface
{
    /**
     * Saves a partner.
     * 
     * @param PartnerInterface $partner
     */
    function save(PartnerInterface $partner);

    /**
     * Updates a partner.
     * 
     * @param PartnerInterface $partner
     */
    function update(PartnerInterface $partner);

    /**
     * Deletes a partner.
     * 
     * @param PartnerInterface $partner
     */
    function delete(PartnerInterface $partner);
}
