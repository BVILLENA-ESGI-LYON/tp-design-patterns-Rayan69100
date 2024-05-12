<?php

namespace EsgiIw\TpDesignPattern\Adapter\Entity\Event\Export;

class EventJsonExportAdapter
{
    private $event;

    public function __construct($event)
    {
        $this->event = $event;
    }

    public function export()
    {
        echo json_encode($this->event);
    }
}
