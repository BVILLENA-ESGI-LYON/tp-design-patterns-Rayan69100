<?php

namespace EsgiIw\TpDesignPattern\Model\Alert;

interface AlertContentFactory
{
    public function createEmailContent();
    public function createSmsContent();
}
