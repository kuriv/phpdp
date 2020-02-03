<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Observer;

use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testChangeInUserLeadsToUserObserverBeingNotified()
    {
        $user = new User();
        $observer = new UserObserver;
        $user->attach($observer);
        $user->changeEmail('foo@foo.com');
        $this->assertCount(1, $observer->getChangedUsers());
    }
}
