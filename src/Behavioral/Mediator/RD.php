<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Mediator;

class RD extends Colleague
{
    /**
     * Get the username.
     *
     * @param  string $username
     * @return string
     */
    public function getUsername(string $username): string
    {
        return 'Username: ' . $username;
    }
}
