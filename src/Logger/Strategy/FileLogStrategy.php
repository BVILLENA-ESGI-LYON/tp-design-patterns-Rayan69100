<?php

namespace EsgiIw\TpDesignPattern\Logger\Strategy;

class FileLogStrategy implements LogStrategy
{
    public function log($message)
    {
        file_put_contents('logs.txt', $message . "\n", FILE_APPEND);
    }
}
