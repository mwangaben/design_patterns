<?php

namespace Umbijani\Template;

/**
 * Class FishSoup
 * @package Umbijani\Template
 */
class FishSoup extends Soup implements SoupInterface
{

    /**
     * @return $this
     */
    public function addMeat()
    {
        $this->mixer .= 'A fish soup with';

        return $this;
    }
}
