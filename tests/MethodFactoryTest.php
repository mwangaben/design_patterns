<?php

use PHPUnit\Framework\TestCase;
use Umbijani\MethodFactory\TextFactory;
use Umbijani\MethodFactory\GraphicFactory;

/**
 * MethodFactoryTest
 *
 * @group group
 */
class MethodFactoryTest extends TestCase
{
    /** @test **/
    public function it_return_the_description_from_text_product()
    {
        $this->assertContains('text product', (new TextFactory())->startFactory());
    }

    /** @test **/
    public function it_return_the_description_from_graphic_product()
    {
        $this->assertContains('graphics product', (new GraphicFactory())->startFactory());
    }
}
