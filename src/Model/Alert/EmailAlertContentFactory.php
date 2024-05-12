<?php

namespace EsgiIw\TpDesignPattern\Model\Alert;

class EmailAlertContentFactory implements AlertContentFactory
{
    public function createEmailContent()
    {
        return "Email: Your account has been validated.";
    }

    public function createSmsContent()
    {
        return "SMS: Your account has been validated.";
    }
}
