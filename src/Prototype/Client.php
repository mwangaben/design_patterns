<?php

namespace Umbijani\Prototype;

class Client
{
    protected $unit;

    /**
     * Setting the Employee Info
     *
     * @param IAcmePrototype $unit
     * @param int $dept
     * @param string $name
     * @param string $pic
     * @return obj
     */
    public function setEmployee(IAcmePrototype $unit, $dept, $name, $pic)
    {
        $this->unit = $unit;
        $this->unit->setName($name);
        $this->unit->setDept($dept);
        return $this;
    }

    /**
     * DisplayEmployee's info
     *
     * @return string
     */
    public function showEmployee()
    {
        return $this->unit->getName() . ' from ' . $this->unit->getDept();
    }
}
