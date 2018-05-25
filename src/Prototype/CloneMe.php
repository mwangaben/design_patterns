<?php

namespace Umbijani\Prototype;

abstract class CloneMe
{
    public $name;
    public $picture;

    abstract public function __clone();
}
