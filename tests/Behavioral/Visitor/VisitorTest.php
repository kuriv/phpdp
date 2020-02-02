<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Visitor;

use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    public function testVisitSomeRole()
    {
        $visitor = new RecordVisitor;
        $user = new User('Kuriv');
        $user->access($visitor);
        $this->assertSame($user, $visitor->getRecord()[0]);

        $group = new Group('Administrators');
        $group->access($visitor);
        $this->assertSame($group, $visitor->getRecord()[1]);
    }
}
