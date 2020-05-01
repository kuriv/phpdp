<?php

namespace Kuriv\PHPDesignPatterns\Structural\Bridge;

use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanPrintUsingTheTextFormatter()
    {
        $pingTestPrinter = new PingTestPrinter(new TextFormatter());
        $this->assertSame('Ping Test', $pingTestPrinter->print());

        $helloWorldPrinter = new HelloWorldPrinter(new TextFormatter());
        $this->assertSame('Hello World', $helloWorldPrinter->print());
    }

    public function testCanPrintUsingTheHTMLFormatter()
    {
        $pingTestPrinter = new PingTestPrinter(new HTMLFormatter());
        $this->assertSame('<p>Ping Test</p>', $pingTestPrinter->print());

        $helloWorldPrinter = new HelloWorldPrinter(new HTMLFormatter());
        $this->assertSame('<p>Hello World</p>', $helloWorldPrinter->print());
    }
}
