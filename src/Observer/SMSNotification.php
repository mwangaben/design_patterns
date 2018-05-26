<?php

namespace Umbijani\Observer;


class SMSNotification implements Observer
{

    public function handle()
    {
        return 'SMS Notification was sent';
    }
}