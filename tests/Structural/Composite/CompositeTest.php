<?php

namespace PHPDesignPatterns\Structural\Composite;

use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $section = new Section;
        $section->addElement(new Text('Username:'));
        $section->addElement(new Input);
        $internal = new Section;
        $internal->addElement(new Text('Password:'));
        $internal->addElement(new Input);
        $section->addElement($internal);
        $this->assertEquals(
            '<section>Username:<input type="text"><section>Password:<input type="text"></section></section>',
            $section->render()
        );
    }
}
