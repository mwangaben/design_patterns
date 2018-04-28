<?php

use PHPUnit\Framework\TestCase;
use Umbijani\Adapter\Inheritance\Dollar;
use Umbijani\Adapter\Inheritance\Euro;
use Umbijani\Adapter\Inheritance\EuroAdapter;

class AdapterClassTest extends TestCase
{
    /** @test **/
    public function it_calculates_the_total_cost_of_both_services_and_products_in_dollar()
    {
        $dollar = new Dollar ;
        $this->assertEquals(100, $dollar->requestCost(20, 80));
    }

    /** @test **/
    public function it_calculate_the_cost_of_product_and_services_in_dollar_with_uses_euro_as_the_currency()
    {
        $euro = new Euro;
        $euroAdapter = new EuroAdapter();

        $this->assertEquals(100, $euroAdapter->requestCost(10, 40));
    }
}
