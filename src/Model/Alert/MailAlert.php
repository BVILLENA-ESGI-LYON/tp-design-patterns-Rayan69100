<?php

namespace EsgiIw\TpDesignPattern\Model\Alert;

class MailAlert implements LoginAlertInterface
{
    public function send()
    {
        // Simuler l'envoi d'un email
        $to = 'admin@example.com';
        $subject = 'User Login Alert';
        $message = 'A user has logged in at ' . date('Y-m-d H:i:s');
        $headers = 'From: noreply@example.com';

        // mail($to, $subject, $message, $headers); // Uncomment to actually send
        echo "Email sent to admin regarding user login.";
    }
}
