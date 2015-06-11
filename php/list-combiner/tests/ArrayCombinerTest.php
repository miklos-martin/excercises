<?php

namespace Excercises\Combiner\Tests;

use Excercises\Combiner\ArrayCombiner;

class ArrayCombinerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provideValues
     */
    public function testCombine(array $list1, array $list2, array $combined)
    {
        $this->assertSame($combined, ArrayCombiner::combine($list1, $list2));
    }

    public function provideValues()
    {
        return [
            'same sizes' => [
                [1, 2, 3],
                ["a", "b", "c"],
                [1, "a", 2, "b", 3, "c"]
            ],
            'list1 is bigger' => [
                [1, 2, 3],
                ["a"],
                [1, "a", 2, 3]
            ],
            'list2 is bigger' => [
                [1],
                ["a", "b", "c"],
                [1, "a", "b", "c"]
            ]
        ];
    }
}
