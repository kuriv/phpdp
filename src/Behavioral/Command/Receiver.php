<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Command;

class Receiver
{
    /**
     * Store the output string.
     *
     * @var array
     */
    private array $output = [];

    /**
     * Add the output string.
     *
     * @param  string $string
     * @return void
     */
    public function addOutput(string $string)
    {
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
}
