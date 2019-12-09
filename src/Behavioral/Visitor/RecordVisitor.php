<?php

namespace PHPDesignPatterns\Behavioral\Visitor;

class RecordVisitor implements RoleVisitor
{
    private $visited = [];

    public function visitUser(User $role)
    {
    }

    public function visitGroup(Group $role)
    {
    }

    public function getVisited(): array
    {
        return $this->visited;
    }
}
