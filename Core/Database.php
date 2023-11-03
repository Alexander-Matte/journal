<?php

namespace Core;
use PDO;
use PDOException;


class Database
{
    public $config;
    public $dsn;
    public $db;
    public function __construct()
    {
        $this->config = require base("config.php");

        $this->dsn = "mysql:host={$this->config['database']['host']};port=3306;{$this->config['database'] ['dbname']};charset=UTF8";
        //
        try {
            $pdo = new PDO($this->dsn, $this->config['database']['user'], $this->config['database']['password']);

            if ($pdo) {
                $this->db = $pdo;
                echo "Connected to the {$this->config['database']['dbname']} database successfully!";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}