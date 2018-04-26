<?php

namespace Umbijani\MethodFactory;

abstract class Creator {
    
    protected abstract function factoryMethod();

    public function startFactory(){
        $mfg = $this->factoryMethod();
        return $mfg;
    }
    
}

