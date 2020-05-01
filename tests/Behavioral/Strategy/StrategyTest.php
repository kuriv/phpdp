<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Strategy;

use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    private int $a = 2;

    private int $b = 3;

    public function testFindMinComparator()
    {
        $context = new Context(new FindMinComparator());
        $min = $context->compare($this->a, $this->b);
        $this->assertEquals(2, $min);
    }

    public function testFindMaxComparator()
    {
        $context = new Context(new FindMaxComparator());
        $max = $context->compare($this->a, $this->b);
        $this->assertEquals(3, $max);
    }
}
