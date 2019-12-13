<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Strategy;

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
     * @param  int    $a
     * @param  int    $b
     * @return int
     */
    public function call(int $a, int $b): int
    {
        return call_user_func([$this->comparator, 'compare'], $a, $b);
    }
}
