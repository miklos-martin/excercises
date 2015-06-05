<?php

namespace Excercises\Poly\Tests;

use Excercises\Poly\Poly;
use Excercises\Poly\Shape;
use Excercises\Poly\Tests\Spy\Stream;

class PolyTest extends \PHPUnit_Framework_TestCase
{
    public function testPrintsFormulaForCalculatingAreaOfSquares()
    {
        $stream = new Stream();
        $poly = new Poly($stream);

        $poly->printAreaFormula(new Shape(Shape::SQUARE));
        $this->assertSame("a^2", $stream->lastWritten());
    }

    public function testPrintsFormulaForCalculatingAreaOfTriangles()
    {
        $stream = new Stream();
        $poly = new Poly($stream);

        $poly->printAreaFormula(new Shape(Shape::TRIANGLE));
        $this->assertSame("(b*h)/2", $stream->lastWritten());
    }

    public function testPrintsFormulaForCalculatingAreaOfRectangles()
    {
        $stream = new Stream();
        $poly = new Poly($stream);

        $poly->printAreaFormula(new Shape(Shape::RECTANGLE));
        $this->assertSame("a*b", $stream->lastWritten());
    }
}
