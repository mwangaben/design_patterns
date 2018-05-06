<?php

namespace Umbijani\State;

class OnState implements IState
{
    /**
     * Setting Context
     *
     * @var Object
     */
    private $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    /**
     * Light can not be turned onwahen is already on
     *
     * @return string
     */
    public function turnLightOn()
    {
        return 'Lights are already on';
    }

    public function turnLightOff()
    {
        $this->context->setState($this->context->getOffState());

        return 'Lights are off';
    }
}
