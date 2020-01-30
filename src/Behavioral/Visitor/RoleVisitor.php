<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Visitor;

interface RoleVisitor
{
    /**
     * Record user access.
     *
     * @param  User   $role
     * @return void
     */
    public function recordUser(User $role);

    /**
     * Record group access.
     *
     * @param  Group  $role
     * @return void
     */
    public function recordGroup(Group $role);
}
