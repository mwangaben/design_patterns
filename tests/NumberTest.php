<?php

use Umbijani\Number;
use PHPUnit\Framework\TestCase;

/**
 * NumberTest
 *
 * @group group
 */
class NumberTest extends TestCase
{
    /** @test **/
    public function returns_number()
    {
        $number = new Number;
        $this->assertEquals(12, $number->getNumber());
    }

    /** @test **/
    public function it_checks_the_array_map_functionality()
    {
        $this->assertContains(8, array_map(function ($a) {
            return  $a * $a * $a;
        }, [2, 3, 4]));
        // $this->assertContains(8, array_map($this->cube($number), [2, 3]), 'message');
    }

    /** @test **/
    public function it_test_array_sum()
    {
        $this->assertEquals(15, array_sum([1, 2, 3, 4, 5]), 'message');
    }

    protected function cube($number)
    {
        return $number * $number * $number;
    }

    /** @test **/
    public function tests_the_array_sum()
    {
        $this->assertEquals(9, array_sum([3, 3, 3]));
    }

    /** @test **/
    public function tests_array_product()
    {
        $this->assertEquals(9, array_product([3, 3]), 'message');
    }

    /** @test **/
    public function array_reduces()
    {
        $this->assertEquals(8, $this->theProduct([2, 2, 2]), 'message');
    }

    /** @test **/
    public function array_replaces()
    {
        $staff = ['Lilian', 'Mkota', 'Angle'];
        $this->assertContains('MwangaBen', array_replace($staff, [0 => 'MwangaBen']));
        $this->assertNotContains('Lilian', array_replace($staff, [0 => 'MwangaBen']));
    }

    protected function theProduct($data)
    {
        return array_reduce($data, function ($carry, $item) {
            return $carry *= $item;
        }, 1);
    }
}
