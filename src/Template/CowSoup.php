<?php

namespace Umbijani\Template;

class CowSoup extends Soup
{
    public function addMeat()
    {
        $this->mixer .= 'A Cow supu with';
        return $this;
    }
}
