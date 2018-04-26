<?php

use PHPUnit\Framework\TestCase;
use Umbijani\Prototype\Client;
use Umbijani\Prototype\Marketing;
use Umbijani\Prototype\Managment;
use Umbijani\Prototype\Engineering;

/**
 * ClientPrototypeTest
 *
 * @group group
 */
class ClientPrototypeTest extends TestCase
{
    /**
     * Marketing Unit
     * @var Object
     */
    protected $market;
    /**
     * management Unit
     *
     * @var Object
     */
    protected $manage;
    /**
     * Engineering Unit
     *
     * @var Object
     */
    protected $engineer;
    /**
     * Clientor the user  of the app
     *
     * @var Object
     */
    protected $client;

    public function setUp()
    {
        $this->market = new Marketing;
        $this->manage = new Managment;
        $this->engineer = new Engineering;
        $this->client = new Client;
    }

    /** @test **/
    public function it_creates_marketing_staff_object()
    {
        $joshua = $this->client;
        $joshua->setEmployee($this->market, 101, 'Joshua', 'JoshuaPic');
        $this->assertContains('Joshua from sales', $joshua->showEmployee());

        //Cloning

        $jacob = clone $joshua;
        $jacob->setEmployee($this->market, 102, 'Jacob', 'JacobPic');
        $this->assertContains('Jacob from promotion', $jacob->showEmployee());

        $brenda = clone $jacob;
        $jacob->setEmployee($this->market, 103, 'Brenda', 'BrendaPic');
        $this->assertContains('Brenda from strategic planning', $brenda->showEmployee());
    }
}
