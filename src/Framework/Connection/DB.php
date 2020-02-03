<?php

namespace App\Framework\Connection;

use PDO;

class DB
{
    protected $pdo;

    public function queryFirst($sql, array $params = null)
    {
        $statement = $this->pdo->prepare($sql); //Prepared Statement ป้องกัน SQL Injection
        $statement->execute($params);
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function queryAll($sql, array $params = null)
    {
        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}