<?php

require_once __DIR__ . '/src/Model/Alert/AlertContentFactory.php';
require_once __DIR__ . '/src/Model/Alert/EmailAlertContentFactory.php';
require_once __DIR__ . '/src/Model/Alert/SmsAlertContentFactory.php';

use EsgiIw\TpDesignPattern\Model\Alert\EmailAlertContentFactory;
use EsgiIw\TpDesignPattern\Model\Alert\SmsAlertContentFactory;

$emailFactory = new EmailAlertContentFactory();
$smsFactory = new SmsAlertContentFactory();

echo $emailFactory->createEmailContent() . "\n";
echo $smsFactory->createSmsContent() . "\n";
