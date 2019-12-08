<?php

namespace PHPDesignPatterns\Behavioral\Strategy;

use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    private function provideIntegers()
    {
        return [2, 3];
    }

    public function testFindMinComparator()
    {
        $integers = $this->provideIntegers();
        $context = new Context(new FindMinComparator);
        $min = $context->call($integers[0], $integers[1]);
        $this->assertEquals(2, $min);
    }

    public function testFindMaxComparator()
    {
        $integers = $this->provideIntegers();
        $context = new Context(new FindMaxComparator);
        $max = $context->call($integers[0], $integers[1]);
        $this->assertEquals(3, $max);
    }
}
