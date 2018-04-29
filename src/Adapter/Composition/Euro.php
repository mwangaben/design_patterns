<?php

namespace Umbijani\Adapter\Composition;

class Euro implements Currency
{
    protected $euro;
    protected $rate;

    public function requestCost($product, $services)
    {
        $this->euro = $product + $services;

        return $this->euro;
    }

    public function requestTotal()
    {
        $this->euro *= $this->rate;

        return $this->euro;
    }
}
