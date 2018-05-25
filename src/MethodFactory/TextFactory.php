<?php

namespace Umbijani\MethodFactory;

class TextFactory extends Creator
{
    public function factoryMethod()
    {
        $product = new TextProduct();
        return $product->getDescription();
    }
}
