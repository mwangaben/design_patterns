<?php

namespace Umbijani\ChainOfResponsibility;

interface Trade
{
    public function buy(Float $price);

    public function setNextBuyer(Trade $buyer);
}
