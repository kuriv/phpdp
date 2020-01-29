<?php

namespace Kuriv\PHPDesignPatterns\Structural\DataMapper;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class DataMapperTest extends TestCase
{
    private $data = [
        1 => [
            'username' => 'foo',
            'email' => 'foo@foo.com'
        ],
        2 => [
            'username' => 'bar',
            'email' => 'bar@bar.com'
        ]
    ];

    public function testCanMapUserFromStorage()
    {
        $adapter = new StorageAdapter($this->data);
        $mapper = new UserMapper($adapter);
        $user = $mapper->findById(1);
        $this->assertInstanceOf(User::class, $user);
    }

    public function testWillNotMapInvalidData()
    {
        $adapter = new StorageAdapter([]);
        $mapper = new UserMapper($adapter);
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('User #1 not found');
        $mapper->findById(1);
    }
}
