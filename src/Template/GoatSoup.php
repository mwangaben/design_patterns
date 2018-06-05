<?php

namespace Umbijani\Template;

class GoatSoup extends Soup
{
    /**
     * @return $this
     */
    public function addMeat()
    {
        $this->mixer .= 'A Goat soup with';
        return $this;
    }
}
