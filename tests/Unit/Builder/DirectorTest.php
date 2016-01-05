<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Product\Tests\Unit\Builder;

use Xidea\Product\Builder\DefaultDirector;
use Xidea\Product\Builder\DefaultBuilder;
use Xidea\Base\Model\Factory\DefaultFactory;

/**
 * @author Artur Pszczółka <artur.pszczolka@xidea.pl>
 */
class DirectorTest extends \PHPUnit_Framework_TestCase
{
    public function testBuildProduct()
    {
        $director = $this->createDefaultDirector();
        
        $product = $director->build();
        
        $this->assertInstanceOf('\Xidea\Product\ProductInterface', $product);
    }
    
    protected function createDefaultDirector()
    {
        return new DefaultDirector(new DefaultBuilder(new DefaultFactory('\Xidea\Product\DefaultProduct')));
    }
}
