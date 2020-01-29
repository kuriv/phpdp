<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Strategy;

interface Comparator
{
    /**
     * Return the result of the comparison.
     *
     * @param  int    $a
     * @param  int    $b
     * @return int
     */
    public function compare(int $a, int $b): int;
}
