<?php

namespace PHPDesignPatterns\Behavioral\Strategy;

class FindMinComparator implements Comparator
{
    /**
     * Return the result of the comparison.
     *
     * @param  int    $a
     * @param  int    $b
     * @return int
     */
    public function compare(int $a, int $b): int
    {
        return min($a, $b);
    }
}
