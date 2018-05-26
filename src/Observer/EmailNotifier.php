<?php
/**
 * Created by PhpStorm.
 * User: benedict
 * Date: 5/26/18
 * Time: 12:35 PM
 */

namespace Umbijani\Observer;


class EmailNotifier implements Observer
{


    public function handle()
    {
        return 'Email Notification was sent';
    }
}