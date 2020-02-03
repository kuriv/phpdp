<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

class Receiver
{
    /**
     * Store the date display status.
     *
     * @var bool
     */
    private bool $display = false;

    /**
     * Store the output string.
     *
     * @var array
     */
    private array $output = [];

    /**
     * Write the output string.
     *
     * @param  string $string
     * @return void
     */
    public function write(string $string)
    {
        if ($this->display) {
            $string .= ' ['.date('Y-m-d').']';
        }
        $this->output[] = $string;
    }

    /**
     * Get the output string.
     *
     * @param  void
     * @return string
     */
    public function getOutput(): string
    {
        return implode("\n", $this->output);
    }

    /**
     * Enable date display.
     *
     * @param  void
     * @return void
     */
    public function enable()
    {
        $this->display = true;
    }

    /**
     * Disable date display.
     *
     * @param  void
     * @return void
     */
    public function disable()
    {
        $this->display = false;
    }
}
