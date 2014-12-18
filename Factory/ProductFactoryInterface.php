<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Product\Factory;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface ProductFactoryInterface
{
    /**
     * @return \Xidea\Component\Product\Model\ProductInterface
     */
    public function create();
}
