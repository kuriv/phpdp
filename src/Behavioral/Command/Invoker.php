<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

class Invoker
{
    /**
     * Store the command instance.
     *
     * @var Command
     */
    private Command $command;

    /**
     * Store the command instance to the current instance.
     *
     * @param  Command $command
     * @return void
     */
    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    /**
     * Execute some commands here.
     *
     * @param  void
     * @return void
     */
    public function execute()
    {
        $this->command->execute();
    }
}
