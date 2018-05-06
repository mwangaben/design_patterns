<?php

namespace Umbijani\State;

class Context
{
    private $onState;
    private $offState;
    private $currentState;

    public function __construct()
    {
        $this->onState = new OnState($this);
        $this->offState = new OffState($this);

        $this->currentState = $this->offState;
    }

    public function turnOnLight()
    {
        return $this->currentState->turnLightOn();
    }

    public function turnOffLight()
    {
        return $this->currentState->turnLightOff();
    }

    public function setState(IState $state)
    {
        return $this->currentState = $state;
    }

    public function getOnState()
    {
        return $this->onState;
    }

    public function getOffState()
    {
        return $this->offState;
    }
}
