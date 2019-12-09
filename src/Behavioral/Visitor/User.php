<?php

namespace PHPDesignPatterns\Behavioral\Visitor;

class User implements Role
{
    /**
     * Store the name.
     *
     * @var string
     */
    private $name;

    /**
     * Store the name to the current instance.
     *
     * @param  string $name
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Accept role access.
     *
     * @param  RoleVisitor $visitor
     * @return void
     */
    public function accept(RoleVisitor $visitor)
    {
        $visitor->visitUser($this);
    }
}
