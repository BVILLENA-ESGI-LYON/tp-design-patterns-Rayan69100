<?php

namespace EsgiIw\TpDesignPattern\Decorator\Entity\Event;

class EventWithTimeDecorator extends EventBase
{
    private $event;

    public function __construct(EventBase $event)
    {
        $this->event = $event;
    }

    public function getDescription()
    {
        return $this->event->getDescription() . " at " . date('H:i');
    }
}

// Répétez pour d'autres décorateurs comme EventWithLocationDecorator, EventWithDateDecorator, etc.
