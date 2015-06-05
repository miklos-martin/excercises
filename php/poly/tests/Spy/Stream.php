<?php

namespace Excercises\Poly\Tests\Spy;

use Excercises\Poly\WritableStream;

class Stream implements WritableStream
{
    /**
     * @var string[]
     */
    private $written = [];

    /**
     * @inheritdoc
     */
    public function write($string)
    {
        $this->written[] = $string;
    }

    /**
     * @return string|null
     */
    public function lastWritten()
    {
        return array_pop($this->written);
    }
}
