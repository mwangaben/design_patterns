<?php

namespace Umbijani\Template;

class GoatSoup extends Soup
{
    public function addMeat()
    {
        $this->mixer .= 'A Goat supu with';
        return $this;
    }
}
