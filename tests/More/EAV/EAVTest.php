<?php

namespace PHPDesignPatterns\More\EAV;

use PHPUnit\Framework\TestCase;

class EAVTest extends TestCase
{
    public function testCanAddAttributeToEntity()
    {
        $colorAttribute = new Attribute('color');
        $colorSilver = new Value($colorAttribute, 'silver');
        $colorBlack = new Value($colorAttribute, 'black');
        $memoryAttribute = new Attribute('memory');
        $memory8GB = new Value($memoryAttribute, '8GB');
        $entity = new Entity('MacBook Pro', [$colorSilver, $colorBlack, $memory8GB]);
        $this->assertEquals('MacBook Pro, color: silver, color: black, memory: 8GB', (string) $entity);
    }
}
