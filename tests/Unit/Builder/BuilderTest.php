<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Product\Tests\Unit\Builder;

use Xidea\Product\Builder\DefaultBuilder;
use Xidea\Base\Model\Factory\DefaultFactory;

/**
 * @author Artur Pszczółka <artur.pszczolka@xidea.pl>
 */
class BuilderTest extends \PHPUnit_Framework_TestCase
{
    public function testBuildProductWithManufacturer()
    {
        $builder = $this->createDefaultBuilder();
        
        $product = $builder->create()
            ->setManufacturer(new \Xidea\Product\Manufacturer\DefaultManufacturer())
            ->getProduct()
        ;
        
        $this->assertInstanceOf('\Xidea\Product\Manufacturer\DefaultManufacturer', $product->getManufacturer());
    }
    
    protected function createDefaultBuilder()
    {
        return new DefaultBuilder(new DefaultFactory('\Xidea\Product\DefaultProduct'));
    }
}
