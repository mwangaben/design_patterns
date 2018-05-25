<?php

namespace Umbijani\Chains;

class Consumer extends Purchases
{
    protected $nextBuyer;

    public function buy(Float $price)
    {
        if ($price < 100) {
            return 'Bought by the final consumer';
        }

        return $this->nextBuyer->buy($price);
    }
}
