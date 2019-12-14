<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

class Invoker
{
    /**
     * Store the command instance.
     *
     * @var Command
     */
    private $command;

    /**
     * Set the specified command instance.
     *
     * @param  Command $command
     * @return void
     */
    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    /**
     * Run the command.
     *
     * @param  void
     * @return void
     */
    public function run()
    {
        $this->command->execute();
    }
}
