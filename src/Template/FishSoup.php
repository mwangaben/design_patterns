<?php

namespace Umbijani\Template;

class FishSoup extends Soup
{
    /**
     * @return $this
     */
    public function addMeat()
    {
        $this->mixer .= 'A fish supu with';
        return $this;
    }
}
