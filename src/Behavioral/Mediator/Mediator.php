<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Mediator;

interface Mediator
{
    /**
     * Get the username.
     *
     * @param  string $username
     * @return string
     */
    public function getUsername(string $username): string;

    /**
     * Print the username.
     *
     * @param  string $username
     * @return void
     */
    public function printUsername(string $username);
}
