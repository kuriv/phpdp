<?php

namespace PHPDesignPatterns\Behavioral\NullObject;

use PHPUnit\Framework\TestCase;

class NullObjectTest extends TestCase
{
    public function testTextPrinter()
    {
        $service = new Service(new TextPrinter);
        $this->expectOutputString('You are now in PHPDesignPatterns\Behavioral\NullObject\Service::test');
        $service->test();
    }

    public function testNullPrinter()
    {
        $service = new Service(new NullPrinter);
        $this->expectOutputString('');
        $service->test();
    }
}
