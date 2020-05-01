<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\TemplateMethod;

use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    public function testCanGetScheduleOfPeople()
    {
        $people = new People();
        $people->process();
        $this->assertEquals(
            ['Go to work', 'Date with girlfriend', 'Go to sleep'],
            $people->getSchedule()
        );
    }

    public function testCanGetScheduleOfProgrammer()
    {
        $programmer = new Programmer();
        $programmer->process();
        $this->assertEquals(
            ['Go to work', 'Programmer has no girlfriend', 'Go to sleep'],
            $programmer->getSchedule()
        );
    }
}
