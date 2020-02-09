<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

class HelloWorldCommand implements Command
{
    /**
     * Store the receiver instance.
     *
     * @var Receiver
     */
    private Receiver $receiver;

    /**
     * Store the receiver instance to the current instance.
     *
     * @param  Receiver $receiver
     * @return void
     */
    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * Execute some commands here.
     *
     * @param  void
     * @return void
     */
    public function execute()
    {
        $this->receiver->addOutput('Hello World');
    }
}
