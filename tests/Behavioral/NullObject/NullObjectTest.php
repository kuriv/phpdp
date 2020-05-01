<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\NullObject;

use PHPUnit\Framework\TestCase;

class NullObjectTest extends TestCase
{
    public function testTextPrinter()
    {
        $service = new Service(new TextPrinter());
        $this->expectOutputString('You are now in ' . Service::class . '::print');
        $service->print();
    }

    public function testNullPrinter()
    {
        $service = new Service(new NullPrinter());
        $this->expectOutputString('');
        $service->print();
    }
}
