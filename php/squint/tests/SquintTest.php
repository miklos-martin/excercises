<?php

class SquintTest extends \PHPUnit_Framework_TestCase
{
    public function testTake()
    {
        $this->assertSameCollection([1, 2], take(2, [1, 2, 3, 4, 5]));
    }

    public function testSquaresOf()
    {
        $this->assertSameCollection([1, 4, 9], squaresOf([1, 2, 3]));
    }

    /**
     * @dataProvider provideRandomCounts
     *
     * @param int $cnt
     */
    public function testIntegers($cnt)
    {
        $this->assertSameCollection(range(1, $cnt), take($cnt, integers()));
    }

    public function provideRandomCounts()
    {
        return [
            [10],
            [53],
            [8],
        ];
    }

    public function testSquint()
    {
        $this->assertSameCollection([1, 4, 9, 16, 25], take(5, squaresOf(integers())));
    }

    private function assertSameCollection($expected, $actual)
    {
        $this->assertSame($this->toArray($expected), $this->toArray($actual));
    }

    private function toArray($collection)
    {
        if ($collection instanceof \Iterator) return iterator_to_array($collection);
        return (array)$collection;
    }
}
