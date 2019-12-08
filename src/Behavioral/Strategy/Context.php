<?php

namespace PHPDesignPatterns\Behavioral\Strategy;

class Context
{
    /**
     * Store the comparator instance.
     *
     * @var Comparator
     */
    private $comparator;

    /**
     * Store the comparator instance to the current instance.
     *
     * @param  Comparator $comparator
     * @return void
     */
    public function __construct(Comparator $comparator)
    {
        $this->comparator = $comparator;
    }

    /**
     * Call the user defined comparison methods.
     *
     * @param  array  $array
     * @return array
     */
    public function execute(array $array): array
    {
        uasort($array, [$this->comparator, 'compare']);
        return $array;
    }
}
