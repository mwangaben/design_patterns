<?php

use PHPUnit\Framework\TestCase;
use Umbijani\SandBox\ClassStep\Teacher;
use Umbijani\SandBox\ClassStep\Mentor;

/**
 * TeacherTest
 *
 * @group group
 */
class TeacherTest extends TestCase
{
    /** @test **/
    public function it_ensure_teacher_teaches_number_of_subjects()
    {
        Teacher::$subjects = ['Bios', 'Math'];
        $this->assertCount(2, Teacher::teaches());
    }

    /** @test **/
    public function it_ensures_change_of_either_parent_or_child_affects_the_other()
    {
        Teacher::$subjects = ['Math', 'Economics'];
        $this->assertCount(2, Teacher::teaches());

        Mentor::$subjects = ['Physcholoy'];

        $this->assertCount(1, Mentor::teaches());

        $this->assertCount(1, Teacher::teaches());

        Teacher::$subjects = ['Math', 'Economics'];

        $this->assertCount(2, Mentor::teaches());

        $this->assertCount(2, Teacher::teaches());
    }
}
