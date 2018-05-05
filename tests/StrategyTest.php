<?php

use PHPUnit\Framework\TestCase;
use Umbijani\Strategy\Client;
use Umbijani\Strategy\LogToFile;
use Umbijani\Strategy\LogToDatabase;
use Umbijani\Strategy\LogToXWebServices;

/**
 * StrategyTest
 *
 * @group group
 */
class StrategyTest extends TestCase
{
    /** @test **/
    public function it_logs_data_to_a_file()
    {
        $client = new Client;

        $this->assertContains('log to file', $client->log(new LogToFile));
    }

    /** @test **/
    public function it_logs_data_to_database()
    {
        $client = new Client;

        $this->assertContains('log to database', $client->log(new LogToDatabase));
    }

    /** @test **/
    public function it_logs_to_a_xwebservice()
    {
        $client = new Client;

        $this->assertContains('log to xwebservices', $client->log(new LogToXWebServices));
    }
}
