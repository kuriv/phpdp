<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Specification;

interface Specification
{
    /**
     * Return the result of inspect.
     *
     * @param  Item   $item
     * @return bool
     */
    public function inspect(Item $item): bool;
}
