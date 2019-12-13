<?php

namespace Kuriv\PHPDesignPatterns\Structural\DataMapper;

class StorageAdapter
{
    /**
     * Store the data.
     *
     * @var array
     */
    private $data = [];

    /**
     * Store the data to the current instance.
     *
     * @param  array $data
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Find the specified data.
     *
     * @param  int    $id
     * @return array
     */
    public function find(int $id): array
    {
        return isset($this->data[$id]) ? $this->data[$id] : [];
    }
}
