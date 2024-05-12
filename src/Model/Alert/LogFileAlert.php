<?php

namespace EsgiIw\TpDesignPattern\Model\Alert;

class LogFileAlert implements LoginAlertInterface
{
    public function send()
    {
        // Écriture dans un fichier de log
        file_put_contents('log.txt', "Log entry: User logged in at " . date('Y-m-d H:i:s') . "\n", FILE_APPEND);
        echo "Log entry created for user login.";
    }
}
