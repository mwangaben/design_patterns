<?php

namespace Umbijani\Adapter\Inheritance;

class Dollar
{
    /**
     * the dollar figure
     *
     * @var float
     */
    private $dollar;

    /**
     * the rate of dollar in terms of itself
     *
     * @var float
     */
    protected $rate = 1;

    /**
     * make the gross costod theservice and product
     *
     * @param float $product
     * @param float $service
     * @return float
     */
    public function requestCost($product, $service)
    {
        $this->dollar = $product + $service;

        return $this->requestTotal();
    }

    /**
     * Calculate thetotal cost
     *
     * @return float
     */
    protected function requestTotal()
    {
        $this->dollar *= $this->rate;

        return $this->dollar;
    }
}
