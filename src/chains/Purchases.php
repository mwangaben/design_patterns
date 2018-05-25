<?php

namespace Umbijani\Chains;

abstract class Purchases implements Trade
{
    abstract public function buy(Float $price);

    public function setNextBuyer(Trade $nextBuyer)
    {
        $this->nextBuyer = $nextBuyer;
    }
}
