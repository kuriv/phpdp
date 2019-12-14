<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Mediator;

interface Mediator
{
    /**
     * Get the user.
     *
     * @param  string $username
     * @return string
     */
    public function getUser(string $username): string;

    /**
     * Print the user.
     *
     * @param  string $username
     * @return void
     */
    public function printUser(string $username);
}
