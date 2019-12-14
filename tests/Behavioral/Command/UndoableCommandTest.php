<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

use PHPUnit\Framework\TestCase;

class UndoableCommandTest extends TestCase
{
    public function testInvocation()
    {
        $invoker = new Invoker;
        $receiver = new Receiver;
        $invoker->setCommand(new HelloWorldCommand($receiver));
        $invoker->run();
        $this->assertSame('Hello World', $receiver->getOutput());

        $addMessageDateCommand = new AddMessageDateCommand($receiver);
        $addMessageDateCommand->execute();
        $invoker->run();
        $this->assertSame("Hello World\nHello World [".date('Y-m-d').']', $receiver->getOutput());

        $addMessageDateCommand->undo();
        $invoker->run();
        $this->assertSame("Hello World\nHello World [".date('Y-m-d')."]\nHello World", $receiver->getOutput());
    }
}
