<?php

namespace EsgiIw\TpDesignPattern\Observer;

class Subject
{
    private $observers = [];

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
        echo "Observer attached.";
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
        echo "Notifying observers.";
    }
}
