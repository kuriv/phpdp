<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

class Receiver
{
    /**
     * Store the date display status.
     *
     * @var bool
     */
    private $enableDate = false;

    /**
     * Store the output string.
     *
     * @var array
     */
    private $output = [];

    /**
     * Write the output string.
     *
     * @param  string $string
     * @return void
     */
    public function write(string $string)
    {
        if ($this->enableDate) {
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
    public function enableDate()
    {
        $this->enableDate = true;
    }

    /**
     * Disable date display.
     *
     * @param  void
     * @return void
     */
    public function disableDate()
    {
        $this->enableDate = false;
    }
}
