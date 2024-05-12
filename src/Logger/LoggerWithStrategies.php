<?php

namespace EsgiIw\TpDesignPattern\Logger;

use EsgiIw\TpDesignPattern\Logger\Strategy\LogStrategy;

class LoggerWithStrategies
{
    private $strategies = [];

    public function log($message, $type)
    {
        if (isset($this->strategies[$type])) {
            foreach ($this->strategies[$type] as $strategy) {
                $strategy->log($message);
            }
        }
    }

    public function addStrategy($type, LogStrategy $strategy)
    {
        $this->strategies[$type][] = $strategy;
    }
}
