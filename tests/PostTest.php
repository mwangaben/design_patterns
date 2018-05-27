<?php

use Umbijani\Observer\FacebookNotification;
use Umbijani\Observer\Post;
use PHPUnit\Framework\TestCase;
use Umbijani\Observer\WhatsappNotification;

class PostTest extends TestCase
{
    /** @test **/
    public function it_notify_observers_when_a_new_post_is_published()
    {
        // Arrange
        $reply = new Post;
        $whatsappNotification = new WhatsappNotification;
        $facebookNotification = new FacebookNotification;

        // Act
        $reply->attach($whatsappNotification);
        $reply->attach($facebookNotification);

        $reply->notify();

        // Assert
        $this->assertContains('Whatsapp the new MD has arrived', $whatsappNotification->message());
        $this->assertContains('Facebook the new MD has arrived', $facebookNotification->message());
    }

    /** @test **/
    public function it_notify_only_observers_when_a_new_post_is_published()
    {
        // Arrange
        $reply = new Post;
        $whatsappNotification = new WhatsappNotification;
        $facebookNotification = new FacebookNotification;

        // Act
        $reply->attach($whatsappNotification);
        $reply->attach($facebookNotification);

        $reply->detach($facebookNotification);
        $reply->notify();

        // Assert
        $this->assertContains('Whatsapp the new MD has arrived', $whatsappNotification->message());
        $this->assertFalse($facebookNotification->message());
    }
}
