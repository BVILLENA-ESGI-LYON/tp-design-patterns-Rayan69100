<?php

require_once __DIR__ . '/src/Singleton/Singleton.php';
require_once __DIR__ . '/src/Observer/Subject.php';
require_once __DIR__ . '/src/Observer/Observer.php';
require_once __DIR__ . '/src/Model/Database/DbConnection.php';
require_once __DIR__ . '/src/Model/Alert/LoginAlertInterface.php';
require_once __DIR__ . '/src/Model/Alert/LogFileAlert.php';
require_once __DIR__ . '/src/Model/Alert/DbAlert.php';
require_once __DIR__ . '/src/Model/Alert/MailAlert.php';
require_once __DIR__ . '/src/Model/Alert/AlertContentFactory.php';
require_once __DIR__ . '/src/Model/Alert/EmailAlertContentFactory.php';
require_once __DIR__ . '/src/Model/Alert/SmsAlertContentFactory.php';

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

// Singleton Test
$db = EsgiIw\TpDesignPattern\Model\Database\DbConnection::getInstance();
$conn = $db->getConnection();

// Factory Method Test
$loginAlert = new EsgiIw\TpDesignPattern\Model\Alert\LogFileAlert();
$loginAlert->send();

// Abstract Factory Test
$emailFactory = new EsgiIw\TpDesignPattern\Model\Alert\EmailAlertContentFactory();
echo $emailFactory->createEmailContent();
