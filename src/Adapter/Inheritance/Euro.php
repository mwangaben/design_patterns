<?php

namespace Umbijani\Adapter\Inheritance;

class Euro
{
    /**
     * Euro figure
     *
     * @var float
     */
    private $euro;

    /**
     * Rate in terms of itself
     *
     * @var integer
     */
    protected $rate = 1;

    /**
     * Calculate the grosscost
     *
     * @param float $product
     * @param float $services
     * @return float
     */
    public function requestCost($product, $services)
    {
        $this->euro = $product + $services;

        return $this->requestTotal();
    }

    /**
     * calculate the total cost
     *
     * @return float
     */
    public function requestTotal()
    {
        $this->euro *= $this->rate;

        return $this->euro;
    }
}
