<?php

namespace PHPDesignPatterns\Behavioral\Visitor;

use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    public function testVisitSomeRole()
    {
        $visitor = new RecordVisitor;
        $role = new User('Kuriv');
        $role->access($visitor);
        $this->assertSame($role, $visitor->getRecord()[0]);

        $role = new Group('Administrators');
        $role->access($visitor);
        $this->assertSame($role, $visitor->getRecord()[1]);
    }
}
