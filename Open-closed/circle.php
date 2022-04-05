<?php

namespace Acme;

class Circle implements Shape
{
    public $radius;


    public function __construct($radius)
    {
        $this->height = $radius;
    }

    public function area()
    {
        return $this->radius * $this->radius * pi();
    }
}
