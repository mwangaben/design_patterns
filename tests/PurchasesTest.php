<?php

use PHPUnit\Framework\TestCase;
use Umbijani\ChainOfResponsibility\Consumer;
use Umbijani\ChainOfResponsibility\Retailer;
use Umbijani\ChainOfResponsibility\WholeSaler;

class PurchasesTest extends TestCase
{
    /** @test **/
    public function it_can_be_bought_by_consumer()
    {
        // Arrange
        $consumer = new Consumer;
        $retailer = new Retailer;

        //Act
        $consumer->setNextBuyer($retailer);

        $this->assertEquals('Bought by the final consumer', $consumer->buy(20));
    }

    /** @test **/
    public function it_can_be_bought_by_the_retailer()
    {
        // Arrange
        $consumer = new Consumer;
        $retailer = new Retailer;

        //Act
        $consumer->setNextBuyer($retailer);

        // Assert
        $this->assertContains('Bought by a retailer', $consumer->buy(200));
    }

    /** @test **/
    public function it_can_be_bought_by_wholesale()
    {
        // Arrange
        $consumer = new Consumer;
        $retailer = new Retailer;
        $wholeSaler = new WholeSaler;

        //Act
        $consumer->setNextBuyer($retailer);
        $retailer->setNextBuyer($wholeSaler);

        // Assert
        $this->assertEquals('Bought by the wholesaler', $consumer->buy(600));
    }
    
    /** @test **/
    public function it_knows_the_limits()
    {
        // Arrange
        $consumer = new Consumer;
        $retailer = new Retailer;
        $wholeSaler = new WholeSaler;

        //Act
        $consumer->setNextBuyer($retailer);
        $retailer->setNextBuyer($wholeSaler);

        // Assert
        $this->assertEquals('Bad', $consumer->buy(6000));
    }
}
