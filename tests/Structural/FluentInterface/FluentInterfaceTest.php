<?php

namespace Kuriv\PHPDesignPatterns\Structural\FluentInterface;

use PHPUnit\Framework\TestCase;

class FluentInterfaceTest extends TestCase
{
    public function testBuildSQL()
    {
        $sql = (new SQL)->select(['username', 'password'])->from('user')->where('id = 1');
        $this->assertEquals('SELECT username, password FROM user WHERE id = 1', $sql);
    }
}
