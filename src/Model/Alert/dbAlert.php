<?php

namespace EsgiIw\TpDesignPattern\Model\Alert;

use EsgiIw\TpDesignPattern\Model\Database\DbConnection;

class DbAlert implements LoginAlertInterface
{
    public function send()
    {
        $db = DbConnection::getInstance()->getConnection();
        $statement = $db->prepare("INSERT INTO login_alerts (message, created_at) VALUES (:message, :created_at)");
        $statement->execute([
            ':message' => 'User logged in',
            ':created_at' => date('Y-m-d H:i:s')
        ]);
        echo "Database entry created for user login.";
    }
}
