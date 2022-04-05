<?php

namespace Acme;

/* When you have a module, that you want to extend without modifying,
separate extensible behavior behind an interface, and flip the dependencies*/

class AreaCalculator
{
    public function calculate($shapes)
    {

        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}
