<?php

namespace Umbijani\State;

class Processing implements DeliveryState
{
    public function goNext(Delivery $state)
    {
        $state->setState(new OnRoute);
    }

    public function getLocation()
    {
        return 'Warehouse';
    }
}
