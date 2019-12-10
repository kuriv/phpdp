<?php

namespace PHPDesignPatterns\Behavioral\Visitor;

class RecordVisitor implements RoleVisitor
{
    /**
     * Store the access record.
     *
     * @var array
     */
    private $record = [];

    /**
     * Record user access.
     *
     * @param  User   $role
     * @return void
     */
    public function recordUser(User $role)
    {
        $this->record[] = $role;
    }

    /**
     * Record group access.
     *
     * @param  Group  $role
     * @return void
     */
    public function recordGroup(Group $role)
    {
        $this->record[] = $role;
    }

    /**
     * Get all the records.
     *
     * @param  void
     * @return array
     */
    public function getRecord(): array
    {
        return $this->record;
    }
}
