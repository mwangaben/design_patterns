<?php

use PHPUnit\Framework\TestCase;
use Umbijani\SandBox\ClassStep\Clothe;

/**
 * ClotheTest
 *
 * @group group
 */
class ClotheTest extends TestCase
{
    /** @test **/
    public function it_checks_checks_paramenter_passed_to_the_construct_function()
    {
        $tshirt = new Clothe(['name' => 'T-shirt', 'size' => 'XL', 'color' => 'blue']);

        $this->assertContains('XL blue T-shirt', $tshirt->getInfo());
    }

    /** @test **/
    public function it_test_what_happen_when_less_parameter_are_given()
    {
        $trousers = new Clothe(['name' => 'Trousers', 'size' => 35]);
        $this->assertContains('35 no color mentioned Trousers', $trousers->getInfo());
    }

    /** @test **/
    public function it_checks_the_assigment_reference()
    {
        $a = 1;
        $b = $a;

        $this->assertEquals(1, $b);

        $b = 2;
        $this->assertEquals(1, $a);

        $c = 3;
        $d = &$c;

        $this->assertEquals(3, $d);

        $d = 4;

        $this->assertNotEquals(3, $c);
    }
}
