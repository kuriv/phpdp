<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testInvocation()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();
        $invoker->setCommand(new HelloWorldCommand($receiver));
        $invoker->execute();
        $this->assertSame('Hello World', $receiver->getOutput());
    }
}
