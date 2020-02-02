<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Visitor;

class Group implements Role
{
    /**
     * Store the name.
     *
     * @var string
     */
    private string $name;

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
     * Allow role access.
     *
     * @param  RoleVisitor $visitor
     * @return void
     */
    public function access(RoleVisitor $visitor)
    {
        $visitor->recordGroup($this);
    }
}
