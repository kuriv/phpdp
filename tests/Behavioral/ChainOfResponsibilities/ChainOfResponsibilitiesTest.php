<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\ChainOfResponsibilities;

use PHPUnit\Framework\TestCase;

class ChainOfResponsibilitiesTest extends TestCase
{
    private array $requests = [1, -1, 2, 0];

    public function testCanHandleDifferentRequests()
    {
        $handler = new FooHandler(new BarHandler(new BazHandler()));
        $data = array_map(fn(int $value): string => $handler->handle($value), $this->requests);
        $this->assertEquals(['Foo', 'Bar', 'Foo', 'Baz'], $data);
    }
}
