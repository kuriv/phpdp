<?php

namespace PHPDesignPatterns\Behavioral\Strategy;

class IDComparator implements Comparator
{
    /**
     * Return the result of the comparison.
     *
     * @param  array  $a
     * @param  array  $b
     * @return int
     */
    public function compare(array $a, array $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}
