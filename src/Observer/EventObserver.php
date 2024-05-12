<?php

namespace EsgiIw\TpDesignPattern\Observer;

interface EventObserver
{
    public function update(EventSubject $subject);
}
