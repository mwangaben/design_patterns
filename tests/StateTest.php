<?php

use PHPUnit\Framework\TestCase;
use Umbijani\State\Context;

/**
 * StateTest
 *
 * @group group
 */
class StateTest extends TestCase
{
    /** @test **/
    public function it_turns_light_on()
    {
        $context = new Context;
        $this->assertContains('Lights on ! Now i can see', $context->turnOnLight());
        $this->assertContains('Lights are already on', $context->turnOnLight());
    }

    /** @test **/
    public function it_turns_lights_off()
    {
        $context = new Context;
        $context->turnOnLight();

        $this->assertContains('Lights are off', $context->turnOffLight());
        $this->assertContains('Lights are already off', $context->turnOffLight());
    }

    /** @test **/
    public function it_can_not_turn_off_when_on_offState_already()
    {
        $context = new Context;

        $this->assertContains('Lights are already off', $context->turnOffLight());
    }
}
