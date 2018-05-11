<?php

namespace Umbijani\SandBox\ClassStep;

class Clock
{
    const DAY_IN_SECONDS = 60 * 60 * 24;

    public static function dayInSeconds()
    {
        return self::DAY_IN_SECONDS;
    }
}
