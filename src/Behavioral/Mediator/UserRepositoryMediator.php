<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Mediator;

class UserRepositoryMediator implements Mediator
{
    /**
     * Store the RD instance.
     *
     * @var RD
     */
    private RD $RD;

    /**
     * Store the UI instance.
     *
     * @var UI
     */
    private UI $UI;

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
     * Get the username.
     *
     * @param  string $username
     * @return string
     */
    public function getUsername(string $username): string
    {
        return $this->RD->getUsername($username);
    }

    /**
     * Print the username.
     *
     * @param  string $username
     * @return void
     */
    public function printUsername(string $username)
    {
        $this->UI->printUsername($username);
    }
}
