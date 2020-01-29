<?php

namespace Kuriv\PHPDesignPatterns\Structural\DataMapper;

use InvalidArgumentException;

class UserMapper
{
    /**
     * Store the storage adapter instance.
     *
     * @var StorageAdapter
     */
    private StorageAdapter $adapter;

    /**
     * Store the storage adapter instance to the current instance.
     *
     * @param  StorageAdapter $adapter
     * @return void
     */
    public function __construct(StorageAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * Get the specified instance.
     *
     * @param  int    $id
     * @return User
     */
    public function findById(int $id): User
    {
        $result = $this->adapter->find($id);
        if (empty($result)) {
            throw new InvalidArgumentException(sprintf('User #%d not found', $id));
        }
        return User::getInstance($result);
    }
}
