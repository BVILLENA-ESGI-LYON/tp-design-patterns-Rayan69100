<?php

require_once __DIR__ . '/src/Model/Email/EmailBuilder.php';

use EsgiIw\TpDesignPattern\Model\Email\EmailBuilder;

$builder = new EmailBuilder();
$email = $builder->setFrom('sender@example.com')
                 ->addTo('recipient1@example.com')
                 ->addTo('recipient2@example.com')
                 ->addCc('cc@example.com')
                 ->setSubject('Test Builder Pattern')
                 ->setMessage('This is a test email from the builder pattern.')
                 ->addAttachment('/path/to/attachment1.pdf')
                 ->addAttachment('/path/to/attachment2.pdf')
                 ->getEmail();

echo "Email prepared with subject: {$email->subject}";
