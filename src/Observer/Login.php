<?php

namespace Umbijani\Observer;

class Login implements Subject
{
    public $observers = [];

    /**
     * @param Observer $observer
     */
    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * @param $index
     */
    public function detach($index)
    {
        unset($this->observers[$index]);
    }

    /**
     *
     */
    public function notify()
    {
        $message = [];
        foreach ($this->observers as $observer) {
            $message[] = $observer->handle();
        }
        return $message;
    }
}
