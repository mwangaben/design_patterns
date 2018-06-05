<?php

namespace Umbijani\Template;

abstract class Soup implements SoupInterface
{
    /**
     * the components that makes
     *
     * @var string
     */
    protected $mixer;

    /**
     * @return mixed
     */
    public function make()
    {
        return $this->addMeat()
            ->addTomatoes()
            ->addWater()
            ->addSalt()
            ->makeUp();
    }

    /**
     * add flesh/meat
     *
     * @return $this
     */
    abstract public function addMeat();

    /**
     * @return $this
     */
    public function addTomatoes()
    {
        $this->mixer .= ' tomatoes';

        return $this;
    }

    /**
     * @return $this
     */
    public function addWater()
    {
        $this->mixer .= ' water';

        return $this;
    }

    /**
     * @return $this
     */
    public function addSalt()
    {
        $this->mixer .= ' and salt';

        return $this;
    }

    /**
     * @return mixed
     */
    public function makeUp()
    {
        return $this->mixer;
    }
}
