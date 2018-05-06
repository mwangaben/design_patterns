<?php

namespace Umbijani\State;

class AtDestination implements DeliveryState
{
    public function goNext(Delivery $state)
    {
        return $state->setState(new AtDestination);
    }

    public function getLocation()
    {
        return 'At the destination ';
    }
}
