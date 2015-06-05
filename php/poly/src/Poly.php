<?php

namespace Excercises\Poly;

class Poly
{
    /**
     * @var WritableStream
     */
    private $stream;

    public function __construct(WritableStream $stream)
    {
        $this->stream = $stream;
    }

    public function printAreaFormula(Shape $shape) {
        switch($shape->getShape()) {
            case Shape::SQUARE:
                $this->stream->write("a^2");
                break;
            case Shape::TRIANGLE:
                $this->stream->write("(b*h)/2");
                break;
            case Shape::RECTANGLE:
                $this->stream->write("a*b");
                break;
        }
    }
}
