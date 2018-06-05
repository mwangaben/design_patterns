<?php

namespace Umbijani\Template;

class CowSoup extends Soup
{
    public function addMeat()
    {
        $this->mixer .= 'A Cow soup with';
        return $this;
    }
}
