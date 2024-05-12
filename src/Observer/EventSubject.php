<?php

namespace EsgiIw\TpDesignPattern\Observer;

class EventSubject
{
    private $observers = [];

    public function attach($observer)
    {
        $this->observers[] = $observer;
    }

    public function detach($observer)
    {
        $this->observers = array_filter($this->observers, function ($o) use ($observer) {
            return $o !== $observer;
        });
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function changeEventDetails($details)
    {
        // Logic to change event details
        $this->notify();
    }
}
