<?php

namespace Umbijani\Template;

abstract class Soup
{
    protected $mixer;

    public function make()
    {
        return $this->addMeat()
             ->addTomatoes()
             ->addWater()
             ->addSalt()
             ->makeUp();
    }

    abstract public function addMeat();

    /**
     * @return $this
     */
    public function addTomatoes()
    {
        $this->mixer .= ' tomatoes';

        return $this;
    }

    public function addWater()
    {
        $this->mixer .= ' water';

        return $this;
    }

    public function addSalt()
    {
        $this->mixer .= ' and salt';

        return $this;
    }

    public function makeUp()
    {
        return $this->mixer;
    }
}
