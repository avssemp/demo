<?php

namespace TheTestCoder\PhpPackageStructure\Tests;

use Avssemp\Demo\FirstClass;
use PHPUnit\Framework\TestCase;

class FirstClassTest extends TestCase
{
    /** @test */
    public function testTrueAssetsToTrue()
    {
        $a=new FirstClass(2,3);
        print_r($a->aa());
    // $condition = FirstClass::cc(3,4);
    // $this->assertEquals(1,$condition->aa());
    }
}
