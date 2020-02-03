<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

class AddMessageDateCommand implements UndoableCommand
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
        $this->receiver->enable();
    }

    /**
     * Execute some other commands here.
     *
     * @param  void
     * @return void
     */
    public function undo()
    {
        $this->receiver->disable();
    }
}
