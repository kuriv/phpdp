<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Creational\Prototype;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Creational\Prototype\FooPrototype;
use PHPDesignPatterns\Creational\Prototype\BarPrototype;

class PrototypeTest extends TestCase
{
    public function testCanGetFooPrototypeAndBarPrototype()
    {
        $fooPrototype = new FooPrototype;
        $barPrototype = new BarPrototype;

        for ($i = 0; $i < 10; $i++) {
            $foo = clone $fooPrototype;
            $this->assertInstanceOf(FooPrototype::class, $foo);
        }

        for ($i = 0; $i < 10; $i++) {
            $bar = clone $barPrototype;
            $this->assertInstanceOf(BarPrototype::class, $bar);
        }
    }
}
