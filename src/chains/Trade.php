<?php

namespace Umbijani\Chains;

interface Trade
{
    public function buy(Float $price);

    public function setNextBuyer(Trade $buyer);
}
