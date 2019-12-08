<?php

namespace PHPDesignPatterns\Behavioral\Strategy;

use DateTime;

class DateComparator implements Comparator
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
        $a = new DateTime($a['datetime']);
        $b = new DateTime($b['datetime']);
        return $a <=> $b;
    }
}
