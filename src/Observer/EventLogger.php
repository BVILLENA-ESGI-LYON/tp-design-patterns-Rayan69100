<?php

namespace EsgiIw\TpDesignPattern\Observer;

class EventLogger implements EventObserver
{
    public function update(EventSubject $subject)
    {
        // Log the change
        echo "Event was updated.";
    }
}
