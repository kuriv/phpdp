<?php

namespace PHPDesignPatterns\Behavioral\Visitor;

interface Role
{
    /**
     * Allow role access.
     *
     * @param  RoleVisitor $visitor
     * @return void
     */
    public function access(RoleVisitor $visitor);
}
