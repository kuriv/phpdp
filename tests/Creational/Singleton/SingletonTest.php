<?php

namespace Kuriv\PHPDesignPatterns\Creational\Singleton;

use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstInstance = Singleton::getinstance();
        $this->assertInstanceOf(Singleton::class, $firstInstance);

        $secoedInstance = Singleton::getinstance();
        $this->assertSame($firstInstance, $secoedInstance);
    }
}
