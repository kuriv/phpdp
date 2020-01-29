<?php

namespace Kuriv\PHPDesignPatterns\Structural\DependencyInjection;

use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $connection = new Connection(new Config('127.0.0.1', 3306, 'admin'));
        $this->assertEquals('mysql:host=127.0.0.1;port=3306;dbname=admin', $connection->getDSN());
    }
}
