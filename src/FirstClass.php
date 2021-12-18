<?php

namespace Avssemp\Demo;

class FirstClass
{

    private $one;

    private $second;

    public function __construct(int $one, int $second)
    {
        $this->one = $one;
        $this->second = $second;
    }
    public static function cc(int $one, int $second): self
    {
        return new static($one, $second);
    }
    /** */
    public function aa()
    {
        return $this->one*$this->second;
    }
}
