<?php

use PHPUnit\Framework\TestCase;
use Umbijani\Template\FishSoup;
use Umbijani\Template\CowSoup;
use Umbijani\Template\GoatSoup;

class SoupTest extends TestCase
{
    /** @test **/
    public function it_make_fish_soup()
    {
        // Arrange
        $fishSoup = new FishSoup;

        //Act and Assert
        $this->assertEquals('A fish soup with tomatoes water and salt', $fishSoup->make());
    }

    /** @test **/
    public function it_make_cow_soup()
    {
        // Arrange
        $cowSoup = new CowSoup;

        $this->assertContains('A Cow soup with tomatoes water and salt', $cowSoup->make());
    }

    /** @test **/
    public function it_make_a_goat_soup()
    {
        $goatSoup = new GoatSoup;

        $this->assertContains('A Goat soup with tomatoes water and salt', $goatSoup->make());
    }
}
