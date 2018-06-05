<?php

use PHPUnit\Framework\TestCase;
use Umbijani\Observer\EmailNotifier;
use Umbijani\Observer\Login;
use Umbijani\Observer\SMSNotification;

class ObserverTest extends TestCase
{
    /** @test **/
    public function it_notify_admin_when_a_user_login()
    {
        //Arrange

        $login = new Login();

        $login->attach(new EmailNotifier);
        $login->attach((new SMSNotification));
//    dd($login->notify());

        $this->assertContains('Email Notification was sent', $login->notify());
        $this->assertContains('SMS Notification was sent', $login->notify());
    }
}
