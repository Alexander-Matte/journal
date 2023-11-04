<?php

namespace Core;
use mysql_xdevapi\Statement;
use PDO;
use PDOException;


class Database
{
    public $config;
    public $dsn;
    public $connection;
    public $statement;
    public function __construct()
    {
        $this->config = require base("config.php");

        $this->dsn = "mysql:host={$this->config['database']['host']};port=3306;dbname={$this->config['database']['dbname']};charset=UTF8";

        $this->connection = new PDO($this->dsn, $this->config['database']['user'], $this->config['database']['password'], [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }
    public function findAll()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (! $result) {
            echo "No result has been found!";
        }

        return $result;
    }

}