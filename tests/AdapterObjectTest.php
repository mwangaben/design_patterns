<?php

use PHPUnit\Framework\TestCase;
use Umbijani\Adapter\Composition\Dollar;
use Umbijani\Adapter\Composition\Euro;
use Umbijani\Adapter\Composition\EuroAdapter;

class AdapterObjectTest extends TestCase
{
    /** @test **/
    public function it_calculates_cost_based_on_dollar()
    {
        $dollar = new Dollar;

        $this->assertEquals(100, $dollar->requestCost(20, 80));
    }

    /** @test **/
    public function it_calculates_cost_in_dollar_using_euro_trasaction_made()
    {
        $ueroAdapter = new EuroAdapter(new Euro);

        $this->assertEquals(100, $ueroAdapter->requestCost(10, 40));
    }
}
