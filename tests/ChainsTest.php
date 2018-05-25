<?php

use PHPUnit\Framework\TestCase;
use Umbijani\ChainOfResponsibility\HomeStatus;
use Umbijani\ChainOfResponsibility\Alarm;
use Umbijani\ChainOfResponsibility\Lights;
use Umbijani\ChainOfResponsibility\Doors;

class ChainsTest extends TestCase
{
    /** @test **/
    public function it_checks_when_alarms_are_not_on()
    {
        //Arrange
        $status = new HomeStatus(['alarm' => false, 'lights' => true]);

        $alarm = new Alarm;

        $lights = new Lights;

        $alarm->succedWith($lights);

        $this->assertContains('Alarms are not on', $alarm->check($status));
    }

    /** @test **/
    public function it_checks_when_lights_are_not_off()
    {
        $status = new HomeStatus(['alarm' => true, 'lights' => false]);

        $alarm = new Alarm;

        $lights = new Lights;

        $alarm->succedWith($lights);
        $this->assertContains('Lights are not off', $alarm->check($status));
    }

    /** @test **/
    public function it_checks_whether_doors_are_closed_before_leaving_home()
    {
        //Arrange
        $status = new HomeStatus(['alarm' => true, 'lights' => true, 'doorsClosed' => false]);

        $alarm = new Alarm;

        $lights = new Lights;

        $doors = new Doors;

        // Act
        $alarm->succedWith($lights);
        $lights->succedWith($doors);

        // Assert
        $this->assertContains('Doors are not closed', $alarm->check($status));
    }
}
