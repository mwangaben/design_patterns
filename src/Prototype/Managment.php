<?php

namespace Umbijani\Prototype;

class Managment extends IAcmePrototype
{
    const UNIT = 'Management';
    private $reseach = 'research';
    private $plan = 'plan';
    private $operation = 'operations';

    /**
     * Settingan Employee's department
     *
     * @param int $orgCode
     * @return void
     */
    public function setDept($orgCode)
    {
        switch ($orgCode) {
            case 201:
                $this->dept = $this->reseach;
                break;

            case 202:
                $this->dept = $this->plan;
                break;

            case 203:
                $this->dept = $this->operation;
                break;

            default:
                $this->dept = 'Unrecognized Management Department';
                break;
        }
    }

    /**
     * Fetching an Employee's department
     *
     * @return string
     */
    public function getDept()
    {
        return $this->dept;
    }

    /**
     * Cloning the object
     *
     * @return void
     */
    public function __clone()
    {
    }
}
