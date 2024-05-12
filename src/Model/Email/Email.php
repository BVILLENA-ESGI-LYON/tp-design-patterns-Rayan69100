<?php

namespace EsgiIw\TpDesignPattern\Model\Email;

class Email
{
    public $from;
    public $to = [];
    public $cc = [];
    public $bcc = [];
    public $subject;
    public $message;
    public $attachments = [];
}
