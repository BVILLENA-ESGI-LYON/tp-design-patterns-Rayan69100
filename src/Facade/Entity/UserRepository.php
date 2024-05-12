<?php

namespace EsgiIw\TpDesignPattern\Facade\Entity;

use EsgiIw\TpDesignPattern\Model\Database\DbConnection;

class UserRepository
{
    private $dbConnection;

    public function __construct()
    {
        $this->dbConnection = DbConnection::getInstance()->getConnection();
    }

    public function find($id)
    {
        $statement = $this->dbConnection->prepare("SELECT * FROM users WHERE id = :id");
        $statement->execute(['id' => $id]);
        return $statement->fetch();
    }

    public function update($id, $newValues)
    {
        // Implement update logic
    }

    public function delete($id)
    {
        $statement = $this->dbConnection->prepare("DELETE FROM users WHERE id = :id");
        $statement->execute(['id' => $id]);
    }

    public function findAll()
    {
        return $this->dbConnection->query("SELECT * FROM users")->fetchAll();
    }

    // Additional methods as required
}
