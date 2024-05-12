<?php

namespace EsgiIw\TpDesignPattern\Adapter\Entity\Event\Export;

class EventCsvExportAdapter
{
    private $event;

    public function __construct($event)
    {
        $this->event = $event;
    }

    public function export()
    {
        $csv = fopen("php://output", 'w');
        fputcsv($csv, array_keys((array)$this->event));
        fputcsv($csv, (array)$this->event);
        fclose($csv);
    }
}
