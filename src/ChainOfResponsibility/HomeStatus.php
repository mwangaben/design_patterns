<?php

namespace Umbijani\ChainOfResponsibility;

class HomeStatus
{
    public $alarm;
    public $lights;

    public function __construct(array $dto)
    {
        $this->alarm = $dto['alarm'] ?? true ;
        $this->lights = $dto['lights'] ?? true;
        $this->doorsClosed = $dto['doorsClosed'] ?? true ;
    }
}
