<?php

namespace Umbijani\Chains;

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
