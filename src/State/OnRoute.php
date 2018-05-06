<?php

namespace Umbijani\State;

class OnRoute implements DeliveryState
{
    public function goNext(Delivery $state)
    {
        return $state->setState(new AtDestination);
    }

    public function getLocation()
    {
        return 'On the Train';
    }
}
