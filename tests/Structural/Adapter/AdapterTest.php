<?php

namespace Kuriv\PHPDesignPatterns\Structural\Adapter;

use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnTextBook()
    {
        $textbook = new TextBook();
        $textbook->open();
        $textbook->turnPage();
        $this->assertSame(2, $textbook->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalTextBook()
    {
        $kindle = new EBookAdapter(new Kindle());
        $kindle->open();
        $kindle->turnPage();
        $this->assertSame(2, $kindle->getPage());
    }
}
