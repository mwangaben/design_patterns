<?php

namespace Umbijani\Prototype;

 abstract class  CloneMe {
    public $name;
    public $picture;

    public abstract function __clone();
}