<?php

namespace EsgiIw\TpDesignPattern\Model\Email;

class EmailBuilder implements EmailBuilderInterface
{
    private $email;

    public function __construct()
    {
        $this->email = new Email();
    }

    public function setFrom(string $from): EmailBuilderInterface
    {
        $this->email->from = $from;
        return $this;
    }

    public function addTo(string $to): EmailBuilderInterface
    {
        $this->email->to[] = $to;
        return $this;
    }

    public function addCc(string $cc): EmailBuilderInterface
    {
        $this->email->cc[] = $cc;
        return $this;
    }

    public function addBcc(string $bcc): EmailBuilderInterface
    {
        $this->email->bcc[] = $bcc;
        return $this;
    }

    public function setSubject(string $subject): EmailBuilderInterface
    {
        $this->email->subject = $subject;
        return $this;
    }

    public function setMessage(string $message): EmailBuilderInterface
    {
        $this->email->message = $message;
        return $this;
    }

    public function addAttachment(string $file): EmailBuilderInterface
    {
        $this->email->attachments[] = $file;
        return $this;
    }

    public function getEmail(): Email
    {
        return $this->email;
    }
}
