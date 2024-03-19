<?php

namespace Core;

use PDO;

class Database
{
    public $connection;
    public $statement;
    public function __construct($config, $username = "root", $password = "admin")
    {
        // Create dsn in construct to create db instance when db class is instantiated
        // http build query creates a query like ?name=Jon&age=33
        $dsn = "mysql:" . http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $username, $password, [
            // make default fetchmode fetch associative array
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query, $params = [])
    {

        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }

    public function find()
    {
        return $this->statement->fetch();
    }
    public function findOrFail()
    {
        $result = $this->find();
        if (!$result) {
            abort();
        }
    }
    public function get()
    {
        return $this->statement->fetchAll();
    }
}
