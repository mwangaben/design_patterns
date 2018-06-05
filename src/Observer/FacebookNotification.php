<?php

namespace Umbijani\Observer;

use SplObserver;
use SplSubject;

class FacebookNotification implements SplObserver
{
    protected $subject;

    /**
     * Receive update from subject
     * @link http://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     * @return object
     * @since 5.1.0
     */
    public function update(SplSubject $subject)
    {
        return $this->subject = $subject;
    }

    /**
     * The message from the subject
     *
     * @return void
     */
    public function message()
    {
        if ($this->subject) {
            return "Facebook {$this->subject->content()}";
        }
        return false;
    }
}
