<?php

namespace EsgiIw\TpDesignPattern\Logger\Strategy;

use EsgiIw\TpDesignPattern\Model\Database\DbConnection;

class DatabaseLogStrategy implements LogStrategy
{
    public function log($message)
    {
        $db = DbConnection::getInstance()->getConnection();
        $stmt = $db->prepare("INSERT INTO logs (message) VALUES (:message)");
        $stmt->execute(['message' => $message]);
    }
}
