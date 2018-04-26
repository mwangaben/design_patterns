<?php

namespace Umbijani\Prototype;

class Engineering extends IAcmePrototype
{
    const UNIT = 'Engineering';
    private $development = 'development';
    private $design = 'design';
    private $sysAd = 'system Administration';

    /**
     * Settingan Employee's department
     *
     * @param int $orgCode
     * @return void
     */
    public function setDept($orgCode)
    {
        switch ($orgCode) {
                case 301:
                     $this->dept = $this->development;
                    break;

                 case 302:
                     $this->dept = $this->design;
                     break;

                 case 303:
                     $this->dept = $this->sysAd;
                     break;

                default:
                    $this->dept = 'Unrecognized Engineering Department';
                    break;
            }
    }

    /**
     * Fetchingan Employee's department
     *
     * @return string
     */
    public function getDept()
    {
        return $this->dept;
    }

    /**
     * Cloningthe object
     *
     * @return void
     */
    public function __clone()
    {
    }
}
