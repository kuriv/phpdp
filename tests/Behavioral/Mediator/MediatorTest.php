<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Mediator;

use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testPrintUser()
    {
        $mediator = new UserRepositoryMediator(new RD(), new UI());
        $this->expectOutputString('Username: Kuriv');
        $mediator->printUsername('Kuriv');
    }
}
