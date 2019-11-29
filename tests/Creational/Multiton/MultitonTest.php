<?php

namespace PHPDesignPatterns\Creational\Multiton;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\Multiton\Multiton;

class MultitonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstInstance = Multiton::getinstance('foo');
        $this->assertInstanceOf(Multiton::class, $firstInstance);

        $secoedInstance = Multiton::getinstance('foo');
        $this->assertSame($firstInstance, $secoedInstance);
    }

    public function testUniquenessForEveryInstance()
    {
        $firstInstance = Multiton::getinstance('foo');
        $this->assertInstanceOf(Multiton::class, $firstInstance);

        $secoedInstance = Multiton::getinstance('bar');
        $this->assertInstanceOf(Multiton::class, $secoedInstance);

        $this->assertNotSame($firstInstance, $secoedInstance);
    }
}
