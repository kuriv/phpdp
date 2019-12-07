<?php

namespace PHPDesignPatterns\Structural\Flyweight;

use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{
    private $characters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    private $fonts = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];

    public function testFlyweight()
    {
        $factory = new TextFactory();
        foreach ($this->characters as $character) {
            foreach ($this->fonts as $font) {
                $flyweight = $factory->getInstance($character);
                $this->assertSame(
                    sprintf('Character %s with font %s', $character, $font),
                    $flyweight->render($font)
                );
            }
        }

        foreach ($this->fonts as $word) {
            $flyweight = $factory->getInstance($word);
            $this->assertSame(
                sprintf('Word %s with font foo', $word),
                $flyweight->render('foo')
            );
        }

        $this->assertCount(count($this->characters) + count($this->fonts), $factory);
    }
}
