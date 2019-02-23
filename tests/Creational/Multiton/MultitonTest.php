<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Multiton;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\Multiton\Multiton;

class MultitonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstInstance = Multiton::getinstance('1');
        $secoedInstance = Multiton::getinstance('1');

        $this->assertInstanceOf(Multiton::class, $firstInstance);
        $this->assertSame($firstInstance, $secoedInstance);
    }

    public function testUniquenessForEveryInstance()
    {
        $firstInstance = Multiton::getinstance('1');
        $secoedInstance = Multiton::getinstance('2');

        $this->assertInstanceOf(Multiton::class, $firstInstance);
        $this->assertInstanceOf(Multiton::class, $secoedInstance);
        $this->assertNotSame($firstInstance, $secoedInstance);
    }
}
