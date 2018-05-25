<?php

namespace Umbijani\Chains;

class Alarm extends HomeChecker
{
    public function check(HomeStatus $status)
    {
        if (!$status->alarm) {
            return  'Alarms are not on';
        }

        return $this->next($status);
    }
}
