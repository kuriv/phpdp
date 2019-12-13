<?php

namespace Kuriv\PHPDesignPatterns\Structural\Proxy;

use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testSetData()
    {
        $data = ['foo' => 10];
        $proxy = new RecordProxy($data);
        $this->assertTrue($proxy->foo == 100);

        $proxy->bar = 20;
        $this->assertTrue($proxy->bar == 20);
    }
}
