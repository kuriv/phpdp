<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Mediator;

class UI extends Colleague
{
    /**
     * Print the username.
     *
     * @param  string $username
     * @return void
     */
    public function printUsername(string $username)
    {
        print $this->mediator->getUser($username);
    }
}
