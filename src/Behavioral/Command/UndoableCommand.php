<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

interface UndoableCommand extends Command
{
    /**
     * Execute some commands here.
     *
     * @param  void
     * @return void
     */
    public function undo();
}
