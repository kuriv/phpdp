<?php

namespace PHPDesignPatterns\Structural\Registry;

use PHPUnit\Framework\TestCase;
use stdClass;

class RegistryTest extends TestCase
{
    public function testSetAndGetLogger()
    {
        $class = new stdClass;
        Registry::set('foo', $class);
        $storedClass = Registry::get('foo');
        $this->assertSame($class, $storedClass);
        $this->assertInstanceOf(stdClass::class, $storedClass);
    }

    // public function testThrowsExceptionWhenTryingToSetInvalidKey()
    // {
    //     Registry::set('bar', new stdClass);
    // }

    // public function testThrowsExceptionWhenTryingToGetNotSetKey()
    // {
    //     Registry::get('bar');
    // }
}
