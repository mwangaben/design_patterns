<?php

use PHPUnit\Framework\TestCase;
use Umbijani\Prototype\Person;

class CloneMetest extends TestCase 
{
    /** @test **/
    public function it_test_the_original_object(){
        $this->assertContains('Original name', (new Person())->display());
    }
    
    /** @test **/
    public function it_test_the_cloned_objected(){
        $person = new Person();
        $cloned = clone $person;
        $cloned->name = 'Cloned name';
        $this->assertContains('Cloned name', $cloned->display());
    }
    
    
}
