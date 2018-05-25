<?php

namespace Umbijani\ChainOfResponsibility;

abstract class HomeChecker
{
    protected $checker;

    abstract public function check(HomeStatus $status);

    public function succedWith(HomeChecker $checker)
    {
        $this->checker = $checker;
    }

    public function next($status)
    {
        if ($this->checker) {
            return $this->checker->check($status);
        }
    }
}
