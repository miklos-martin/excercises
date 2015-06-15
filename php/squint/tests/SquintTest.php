<?php

namespace Excercises\Squint\Tests;

use Excercises\Squint\Integers;

class SquintTest extends \PHPUnit_Framework_TestCase
{
    public function testSquint()
    {
        $expectedSquares = [1, 4, 9, 16, 25];

        $this->assertSame($expectedSquares, take(5, squaresOf(integers())));
    }
}
