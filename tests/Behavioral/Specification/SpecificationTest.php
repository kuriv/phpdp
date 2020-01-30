<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Specification;

use PHPUnit\Framework\TestCase;

class SpecificationTest extends TestCase
{
    public function testCanOr()
    {
        $firstSpecification = new PriceSpecification(50, 99);
        $secondSpecification = new PriceSpecification(101, 200);
        $orSpecification = new OrSpecification($firstSpecification, $secondSpecification);
        $this->assertFalse($orSpecification->inspect(new Item(100)));
        $this->assertTrue($orSpecification->inspect(new Item(51)));
        $this->assertTrue($orSpecification->inspect(new Item(150)));
    }

    public function testCanAnd()
    {
        $firstSpecification = new PriceSpecification(50, 100);
        $secondSpecification = new PriceSpecification(80, 200);
        $andSpecification = new AndSpecification($firstSpecification, $secondSpecification);
        $this->assertFalse($andSpecification->inspect(new Item(150)));
        $this->assertFalse($andSpecification->inspect(new Item(1)));
        $this->assertFalse($andSpecification->inspect(new Item(51)));
        $this->assertTrue($andSpecification->inspect(new Item(100)));
    }

    public function testCanNot()
    {
        $firstSpecification = new PriceSpecification(50, 100);
        $notSpecification = new NotSpecification($firstSpecification);
        $this->assertTrue($notSpecification->inspect(new Item(150)));
        $this->assertFalse($notSpecification->inspect(new Item(50)));
    }
}
