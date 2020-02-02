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
    public function recordUser(User $user);

    /**
     * Record group access.
     *
     * @param  Group  $role
     * @return void
     */
    public function recordGroup(Group $group);
}
