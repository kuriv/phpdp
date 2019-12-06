<?php

namespace PHPDesignPatterns\Structural\Flyweight;

use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{
    private $characters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    public function testFlyweight()
    {
        $factory = new FlyweightFactory();
        foreach ($this->characters as $character) {
            $flyweight = $factory->get($character);
            $this->assertEquals($character, $flyweight->render($character));
        }
    }
}
