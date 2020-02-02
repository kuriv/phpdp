<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Specification;

class NotSpecification implements Specification
{
    /**
     * Store the specification instance.
     *
     * @var Specification
     */
    private Specification $specification;

    /**
     * Store the specification instance to the current instance.
     *
     * @param  Specification $specification
     * @return void
     */
    public function __construct(Specification $specification)
    {
        $this->specification = $specification;
    }

    /**
     * Return the result of inspect.
     *
     * @param  Item   $item
     * @return bool
     */
    public function inspect(Item $item): bool
    {
        return !$this->specification->inspect($item);
    }
}
