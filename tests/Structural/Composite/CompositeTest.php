<?php

namespace Kuriv\PHPDesignPatterns\Structural\Composite;

use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $firstSection = new Section();
        $firstSection->addElement(new Text('Username:'));
        $firstSection->addElement(new Input());
        $secondSection = new Section();
        $secondSection->addElement(new Text('Password:'));
        $secondSection->addElement(new Input());
        $form = new Form();
        $form->addElement($firstSection);
        $form->addElement($secondSection);
        $this->assertEquals(
            '<form><section>Username:<input type="text"></section><section>Password:<input type="text"></section></form>',
            $form->render()
        );
    }
}
