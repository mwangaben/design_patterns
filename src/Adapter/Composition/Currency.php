<?php

namespace Umbijani\Adapter\Composition;

/**
 * Currency Interface
 */
interface Currency
{
    public function requestCost($product, $services);
}
