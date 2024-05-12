<?php

namespace EsgiIw\TpDesignPattern\Decorator\Entity\Event;

class EventBase
{
    protected $description;

    public function getDescription()
    {
        return $this->description;
    }
}
