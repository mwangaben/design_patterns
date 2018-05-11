<?php

use PHPUnit\Framework\TestCase;
use Umbijani\SandBox\ClassStep\Car;
use Umbijani\SandBox\ClassStep\Benz;

/**
 * VehicleTest
 *
 * @group group
 */
class VehicleTest extends TestCase
{
    protected $class;

    public function setUp()
    {
        $this->class = 'Umbijani\SandBox\ClassStep\Vehicle';
    }

    /** @test **/
    public function it_has_a_parent_class()
    {
        $this->assertContains($this->class, get_parent_class(new Car));
    }

    /** @test **/
    public function it_has_a_sub_class_class()
    {
        $this->assertTrue(is_subclass_of(new Car, $this->class));
    }

    /** @test **/
    public function it_shows_it_parents_class()
    {
        $this->assertContains($this->class, class_parents(new Benz));

        $this->assertCount(2, class_parents(new Benz));
    }

    /** @test **/
    public function it_tests_array_subset()
    {
        $info = ['name' => 'Beny', 'age' => 23];
        $this->assertSame(['name' => 'Beny', 'age' => 23], $info);
    }
}
