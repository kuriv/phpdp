<?php

namespace PHPDesignPatterns\Behavioral\Visitor;

interface RoleVisitor
{
    public function visitUser(User $role);

    public function visitGroup(Group $role);
}
