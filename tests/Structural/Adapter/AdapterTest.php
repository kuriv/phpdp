<?php

namespace PHPDesignPatterns\Structural\Adapter;

use PHPUnit\Framework\TestCase;
use PHPDesignPatterns\Structural\Adapter\TextBook;
use PHPDesignPatterns\Structural\Adapter\Kindle;
use PHPDesignPatterns\Structural\Adapter\EBookAdapter;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnTextBook()
    {
        $textbook = new TextBook;
        $textbook->open();
        $textbook->turnPage();
        $this->assertSame(2, $textbook->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalTextBook()
    {
        $kindle = new EBookAdapter(new Kindle);
        $kindle->open();
        $kindle->turnPage();
        $this->assertSame(2, $kindle->getPage());
    }
}
