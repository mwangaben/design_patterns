<?php

namespace Umbijani\ChainOfResponsibility;

abstract class Purchases implements Trade
{
    protected $nextBuyer;

    abstract public function buy(Float $price);

    public function setNextBuyer(Trade $nextBuyer)
    {
        return $this->nextBuyer = $nextBuyer;
    }

    public function next($price)
    {
        if ($this->nextBuyer) {
            return $this->nextBuyer->buy($price);
        }
        return 'Bad';
    }
}
