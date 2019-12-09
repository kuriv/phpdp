<?php

namespace PHPDesignPatterns\Behavioral\Visitor;

interface Role
{
    /**
     * Accept role access.
     *
     * @param  RoleVisitor $visitor
     * @return void
     */
    public function accept(RoleVisitor $visitor);
}
