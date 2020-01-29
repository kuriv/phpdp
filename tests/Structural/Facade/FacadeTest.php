<?php

namespace Kuriv\PHPDesignPatterns\Structural\Facade;

use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        $bios = $this->createMock(BIOS::class);
        $os = $this->createMock(OS::class);
        $os->method('login')->will($this->returnValue('Welcome'));
        $facade = new Facade($bios, $os);
        $facade->turnOn();
        $this->assertEquals('Welcome', $os->login());
        $facade->turnOff();
    }
}
