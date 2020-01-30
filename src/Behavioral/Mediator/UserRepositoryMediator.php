<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Mediator;

class UserRepositoryMediator implements Mediator
{
    /**
     * Store the RD instance.
     *
     * @var RD
     */
    private $RD;

    /**
     * Store the UI instance.
     *
     * @var UI
     */
    private $UI;

    /**
     * Store the RD instance and UI instance to the current instance.
     *
     * @param  RD $RD
     * @param  UI $UI
     * @return void
     */
    public function __construct(RD $RD, UI $UI)
    {
        $this->RD = $RD;
        $this->UI = $UI;
        $this->RD->setMediator($this);
        $this->UI->setMediator($this);
    }

    /**
     * Get the user.
     *
     * @param  string $username
     * @return string
     */
    public function getUser(string $username): string
    {
        return $this->RD->getUsername($username);
    }

    /**
     * Print the user.
     *
     * @param  string $username
     * @return void
     */
    public function printUser(string $username)
    {
        $this->UI->printUsername($username);
    }
}
