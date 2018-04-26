<?php

namespace Umbijani\MethodFactory;

class GraphicFactory extends Creator
{
    public function factoryMethod(){
        $gp = new GraphicProduct();
        return $gp->getDescription();
    }
    
}