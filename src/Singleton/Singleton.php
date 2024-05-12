<?php

namespace EsgiIw\TpDesignPattern\Singleton;

class Singleton
{
    private static $instance;

    private function __construct() {}

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
            echo "Creating a new instance of Singleton.";
        }
        return self::$instance;
    }

    public function someBusinessLogic()
    {
        echo "Executing some business logic.";
    }
}
