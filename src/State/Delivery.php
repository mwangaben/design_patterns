<?php

namespace Umbijani\State;

class Delivery
{
    private $currentState;

    public function __construct(DeliveryState $state)
    {
        $this->currentState = $state;
    }

    public function getCurrentLocation()
    {
        return $this->currentState->getLocation();
    }

    public function goNext()
    {
        return $this->currentState->goNext($this);
    }

    public function setState(DeliveryState $state)
    {
        return $this->currentState = $state;
    }
}
