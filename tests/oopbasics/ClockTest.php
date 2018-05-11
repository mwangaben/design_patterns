<?php

use PHPUnit\Framework\TestCase;
use Umbijani\SandBox\ClassStep\Clock;

/**
 * ClockTest
 *
 * @group group
 */
class ClockTest extends TestCase
{
    /** @test **/
    public function it_returns_how_many_seconds_in_a_day()
    {
        $this->assertEquals(86400, Clock::dayInSeconds());
    }
}
