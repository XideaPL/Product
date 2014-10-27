<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Product\Provider;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface AuthorProviderInterface
{
    /**
     * @return \Xidea\Component\User\Model\AuthorInterface
     */
    public function provide();
}
