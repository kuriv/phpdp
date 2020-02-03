<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

interface UndoableCommand extends Command
{
    /**
     * Execute some other commands here.
     *
     * @param  void
     * @return void
     */
    public function undo();
}
