<?php

use PHPUnit\Framework\TestCase;
use Umbijani\State\Delivery;
use Umbijani\State\Processing;
use Umbijani\State\OnRoute;

/**
 * DeliveryStateTest
 *
 * @group group
 */
class DeliveryStateTest extends TestCase
{
    /** @test **/
    public function it_can_initilize_the_delivery_with_processing()
    {
        $delivery = new Delivery(new Processing);

        $this->assertContains('Warehouse', $delivery->getCurrentLocation());
    }

    /** @test **/
    public function it_can_go_to_the_next_stage_which_is_onRoute()
    {
        $delivery = new Delivery(new Processing);
        $delivery->goNext();

        $this->assertContains('On the Train', $delivery->getCurrentLocation());
    }

    /** @test **/
    public function it_can_go_till_destination_point()
    {
        $delivery = new Delivery(new OnRoute);
        $delivery->goNext();

        $this->assertContains('At the destination', $delivery->getCurrentLocation());
    }

    /** @test **/
    public function it_ensures_delievery_do_not_go_beyond_destination_stage()
    {
        $delivery = new Delivery(new OnRoute);
        $delivery->goNext();

        $this->assertContains('At the destination', $delivery->getCurrentLocation());

        $delivery->goNext();
        $this->assertContains('At the destination', $delivery->getCurrentLocation());
    }
}
