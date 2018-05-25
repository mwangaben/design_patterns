<?php

namespace Umbijani\ChainOfResponsibility;

class Retailer extends Purchases
{
    protected $nextBuyer;

    public function buy(Float $price)
    {
        if ($price < 500) {
            return 'Bought by a retailer';
        }

        return $this->nextBuyer->buy($price);
    }
}
