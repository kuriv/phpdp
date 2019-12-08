<?php

namespace PHPDesignPatterns\Behavioral\Strategy;

use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    private function provideIntegers()
    {
    }

    private function provideDates()
    {
    }

    public function testIDComparator()
    {
        $array = $this->provideIntegers();
        $context = new Context(new IDComparator);
        $result = $context->execute($array);
        var_dump($result);
        die();
        // $firstElement = array_shift($result);
        // $this->assertEquals
    }
}
