<?php

namespace EsgiIw\TpDesignPattern\Model\Database;

class DbConnection
{
    private static $instance = null;
    private $connection;

    private function __construct()
    {
        $this->connection = new \PDO("mysql:host=localhost;dbname=tp_design_pattern", "root", "");
        echo "Database connection established.";
    }

    public static function getInstance(): DbConnection
    {
        if (self::$instance === null) {
            self::$instance = new DbConnection();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
