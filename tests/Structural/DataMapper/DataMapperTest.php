<?php

namespace PHPDesignPatterns\Structural\DataMapper;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Structural\DataMapper\User;

class DataMapperTest extends TestCase
{
    public function testCanMapUserFromStorage()
    {
        $data = [
            1 => [
                'username' => 'foo',
                'email' => 'foo@foo.com'
            ],
            2 => [
                'username' => 'bar',
                'email' => 'bar@bar.com'
            ]
        ];
        $adapter = new StorageAdapter($data);
        $mapper = new UserMapper($adapter);
        $user = $mapper->findById(1);
        $this->assertInstanceOf(User::class, $user);
    }

    // public function testWillNotMapInvalidData()
    // {
    //     $adapter = new StorageAdapter([]);
    //     $mapper = new UserMapper($adapter);
    //     $mapper->findById(1);
    // }
}
