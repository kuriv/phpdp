<?php

namespace Kuriv\PHPDesignPatterns\Structural\Registry;

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;
use stdClass;

class RegistryTest extends TestCase
{
    public function testSetAndGet()
    {
        $class = new stdClass();
        Registry::set('foo', $class);
        $storedClass = Registry::get('foo');
        $this->assertSame($class, $storedClass);
        $this->assertInstanceOf(stdClass::class, $storedClass);
    }

    public function testThrowsExceptionWhenTryingToSetInvalidKey()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid key given');
        Registry::set('bar', new stdClass());
    }

    public function testThrowsExceptionWhenTryingToGetNotSetKey()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid key given');
        Registry::get('bar');
    }
}
