<?php

namespace Excercises\Poly;

class Shape
{
    const SQUARE = "square";
    const TRIANGLE = "triangle";
    const RECTANGLE = "rectangle";

    /**
     * @var string
     */
    private $shape;

    public function __construct($shape)
    {
        $this->shape = $shape;
    }

    /**
     * @return string
     */
    public function getShape()
    {
        return $this->shape;
    }
}
