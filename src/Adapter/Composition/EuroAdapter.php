<?php

namespace Umbijani\Adapter\Composition;

class EuroAdapter implements Currency
{
    protected $euro;

    /**
     * Fire Up Euro Object
     *
     * @param Currency $euro
     */
    public function __construct(Currency $euro)
    {
        $this->euro = $euro;
    }

    /**
     * Calculating the Gross cost
     *
     * @param float $product
     * @param float $services
     * @return float
     */
    public function requestCost($product, $services)
    {
        $figure = $this->euro->requestCost($product, $services);
        $figure *= 2;
        return $figure;
    }
}
