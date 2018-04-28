<?php

namespace Umbijani\Adapter\Inheritance;

class EuroAdapter extends Euro implements Currency
{
    public function __construct()
    {
        $this->requester();
    }

    public function requester()
    {
        $this->rate = 2;

        return $this->rate;
    }
}
