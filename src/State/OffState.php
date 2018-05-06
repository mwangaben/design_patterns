<?php

namespace Umbijani\State;

class OffState implements IState
{
    private $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function turnLightOn()
    {
        $this->context->setState($this->context->getOnState());

        return 'Lights on ! Now i can see';
    }

    public function turnLightOff()
    {
        return 'Lights are already off';
    }
}
