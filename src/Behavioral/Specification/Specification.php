<?php

namespace PHPDesignPatterns\Behavioral\Specification;

interface Specification
{
    /**
     * [isSatisfied description]
     *
     * @param  Item    $item
     * @return bool
     */
    public function isSatisfied(Item $item): bool;
}
