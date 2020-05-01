<?php

namespace Kuriv\PHPDesignPatterns\Creational\Prototype;

use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanGetFooPrototypeAndBarPrototype()
    {
        $fooPrototype = new FooPrototype();
        $barPrototype = new BarPrototype();

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
