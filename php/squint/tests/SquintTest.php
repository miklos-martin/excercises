<?php

namespace Excercises\squint\tests;

use Excercises\Squint\Integers;

class SquintTest extends \PHPUnit_Framework_TestCase
{
    public function testSquint()
    {
        $integers = new Integers();
        $expectedSquares = [1, 4, 9, 16, 25];

        $this->assertSame($expectedSquares, take(5, squaresOf($integers)));
    }
}
