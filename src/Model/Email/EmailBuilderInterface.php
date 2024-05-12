<?php

namespace EsgiIw\TpDesignPattern\Model\Email;

interface EmailBuilderInterface
{
    public function setFrom(string $from): EmailBuilderInterface;
    public function addTo(string $to): EmailBuilderInterface;
    public function addCc(string $cc): EmailBuilderInterface;
    public function addBcc(string $bcc): EmailBuilderInterface;
    public function setSubject(string $subject): EmailBuilderInterface;
    public function setMessage(string $message): EmailBuilderInterface;
    public function addAttachment(string $file): EmailBuilderInterface;
    public function getEmail(): Email;
}
