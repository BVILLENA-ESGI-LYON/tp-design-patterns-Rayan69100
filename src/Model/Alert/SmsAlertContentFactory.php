<?php

namespace EsgiIw\TpDesignPattern\Model\Alert;

class SmsAlertContentFactory implements AlertContentFactory
{
    public function createEmailContent()
    {
        return "Email: Reminder for your event tomorrow.";
    }

    public function createSmsContent()
    {
        return "SMS: Reminder for your event tomorrow.";
    }
}
