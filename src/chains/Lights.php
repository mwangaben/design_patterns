<?php

namespace Umbijani\Chains;

class Lights extends HomeChecker
{
    public function check(HomeStatus $status)
    {
        if (!$status->lights) {
            return 'Lights are not off';
        }

        return $this->next($status);
    }
}
