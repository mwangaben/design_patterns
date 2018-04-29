<?php

namespace Umbijani\Adapter\Composition;

class Dollar implements Currency
{
    protected $dollar;
    protected $rate = 1;

    public function requestCost($product, $services)
    {
        $this->dollar = $product + $services;

        return $this->requestTotal();
    }

    public function requestTotal()
    {
        $this->dollar *= $this->rate;

        return $this->dollar;
    }
}
