<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Observer;

use SplObserver;
use SplSubject;

class UserObserver implements SplObserver
{
    /**
     * Store the changed users.
     *
     * @var array
     */
    private array $changedUsers = [];

    /**
     * Update the property.
     *
     * @param  SplSubject $subject
     * @return void
     */
    public function update(SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;
    }

    /**
     * Get all changed users.
     *
     * @param  void
     * @return array
     */
    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}
