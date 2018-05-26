<?php

namespace Umbijani\ChainOfResponsibility;

class Consumer extends Purchases
{
    public function buy(Float $price)
    {
        if ($price < 100) {
            return 'Bought by the final consumer';
        }
        
        return $this->next($price);
    }
}
