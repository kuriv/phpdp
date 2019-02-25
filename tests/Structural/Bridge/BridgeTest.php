<?php

declare(strict_types = 1);

namespace PHPDesignPatterns\Structural\Bridge;

use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextFormatter()
    {
        $printer = new HelloWorldPrinter(new PlainTextFormatter);

        $this->assertSame('Hello World', $printer->print());
    }

    public function testCanPrintUsingTheHtmlFormatter()
    {
        $printer = new HelloWorldPrinter(new HtmlFormatter);

        $this->assertSame('<p>Hello World</p>', $printer->print());
    }
}
