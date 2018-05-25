<?php

namespace Umbijani\Prototype;

class Person extends CloneMe
{
    public function __construct()
    {
        $this->name = 'Original name';
        $this->picture = 'Original picture';
    }

    public function display()
    {
        return $this->name. ' '.$this->picture;
    }
    
    public function __clone()
    {
    }
}
