<?php

namespace Excercises\Greatness\Tests;

use Excercises\Greatness\Number;

class NumberTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provideData
     *
     * @param int[] $input
     * @param int $output
     */
    public function testConcatsGreatestPossibleInteger(array $input, $output)
    {
        $this->assertSame($output, Number::concatGreatest($input));
    }

    public function provideData()
    {
        return [
            'empty array' => [[], 0],
            'single elem array' => [[1], 1],
            'the obvious' => [[1, 2], 21],
            'the trick' => [[10, 2], 210],
            'oh man, that changes it all' => [[2, 22, 21], 22221]
        ];
    }
}
