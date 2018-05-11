<?php

namespace Umbijani\SandBox\ClassStep;

class Teacher
{
    public static $subjects = [];

    public static function teaches()
    {
        return self::$subjects;
    }
}
