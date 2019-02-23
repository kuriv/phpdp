<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Singleton;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\Singleton\Singleton;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstInstance = Singleton::getinstance();
        $secoedInstance = Singleton::getinstance();

        $this->assertInstanceOf(Singleton::class, $firstInstance);
        $this->assertSame($firstInstance, $secoedInstance);
    }
}
