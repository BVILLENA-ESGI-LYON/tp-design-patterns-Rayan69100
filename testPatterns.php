<?php

require_once __DIR__ . '/src/Singleton/Singleton.php';
require_once __DIR__ . '/src/Observer/Subject.php';
require_once __DIR__ . '/src/Observer/Observer.php';

use EsgiIw\TpDesignPattern\Singleton\Singleton;
use EsgiIw\TpDesignPattern\Observer\Subject;
use EsgiIw\TpDesignPattern\Observer\Observer;

// Test Singleton
$instance = Singleton::getInstance();
$instance->someBusinessLogic();

// Test Observer
$subject = new Subject();
$observer = new class implements Observer {
    public function update()
    {
        echo "Observer updated.";
    }
};
$subject->attach($observer);
$subject->notify();
