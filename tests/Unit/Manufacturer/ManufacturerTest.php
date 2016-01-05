<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Product\Tests\Unit\Manufacturer;

use Xidea\Product\Manufacturer\DefaultManufacturer;

/**
 * @author Artur Pszczółka <artur.pszczolka@xidea.pl>
 */
class ProductManufacturertTest extends \PHPUnit_Framework_TestCase
{
    public function testName()
    {
        $manufacturer = $this->createProductManufacturer();
        $this->assertNull($manufacturer->getName());
        
        $name = 'Manufacturer 1';
        
        $manufacturer->setName($name);
        $this->assertEquals($name, $manufacturer->getName());
    }
    
    protected function createProductManufacturer()
    {
        return new DefaultManufacturer();
    }
}
