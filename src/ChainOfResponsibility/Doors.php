<?php

namespace Umbijani\ChainOfResponsibility;

class Doors extends HomeChecker
{
    public function check(HomeStatus $status)
    {
        if (!$status->doorsClosed) {
            return 'Doors are not closed';
        }

        return $this->next($status);
    }
}
