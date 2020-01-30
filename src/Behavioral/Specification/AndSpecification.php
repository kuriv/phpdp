<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Specification;

class AndSpecification implements Specification
{
    /**
     * Store several specification instances.
     *
     * @var array
     */
    private $specifications = [];

    /**
     * Store several specification instances to the current instance.
     *
     * @param  Specification $specifications
     * @return void
     */
    public function __construct(Specification ...$specifications)
    {
        $this->specifications = $specifications;
    }

    /**
     * Return the result of inspect.
     *
     * @param  Item   $item
     * @return bool
     */
    public function inspect(Item $item): bool
    {
        foreach ($this->specifications as $specification) {
            if (!$specification->inspect($item)) {
                return false;
            }
        }
        return true;
    }
}
