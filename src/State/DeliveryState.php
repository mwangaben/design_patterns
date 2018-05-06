<?php

namespace Umbijani\State;

interface DeliveryState
{
    public function goNext(Delivery $state);

    public function getLocation();
}
