<?php

namespace Kuriv\PHPDesignPatterns\Structural\Proxy;

class RecordProxy extends Record
{
    /**
     * Store some data to the parent instance.
     *
     * @param  array $data
     * @return void
     */
    public function __construct(array $data = [])
    {
        $data = array_map(function ($value) {
            return $value ** 2;
        }, $data);
        parent::__construct($data);
    }
}
