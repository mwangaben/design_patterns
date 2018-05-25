<?php

namespace Umbijani\ChainOfResponsibility;

class WholeSaler extends Purchases
{
    public function buy(Float $price)
    {
        if ($price < 1000) {
            return 'Bought by the wholesaler';
        }

        return $this->next($price);
    }
}
