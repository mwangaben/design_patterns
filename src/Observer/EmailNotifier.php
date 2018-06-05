<?php

namespace Umbijani\Observer;


class EmailNotifier implements Observer
{


    public function handle()
    {
        return 'Email Notification was sent';
    }
}