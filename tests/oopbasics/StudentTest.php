<?php

use PHPUnit\Framework\TestCase;
use Umbijani\SandBox\ClassStep\Student;

/**
 * StudentTest
 *
 * @group group
 */
class StudentTest extends TestCase
{
    /** @test **/
    public function it_checks_the_declaration_of_the_class()
    {
        $std = new Student;
        $className = 'Umbijani\SandBox\ClassStep\Student';

        $this->assertContains('Student', get_class($std));

        $this->assertTrue(is_a($std, $className));
    }

    /** @test **/
    public function it_checks_properties_declared_in_the_class()
    {
        $std = new Student;
        $className = 'Umbijani\SandBox\ClassStep\Student';

        $this->assertArrayHasKey('name', get_class_vars($className));

        $this->assertArrayHasKey('name', get_object_vars($std));

        $this->assertTrue(property_exists($className, 'name'), 'message');

        $this->assertTrue(property_exists($std, 'name'));
    }

    /** @test **/
    public function it_checks_whether_methods_exists_in_a_class()
    {
        $this->assertTrue(method_exists(new Student, 'getName'));
    }
}
