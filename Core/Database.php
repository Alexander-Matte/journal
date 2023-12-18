<?php
namespace Core;
use mysql_xdevapi\Statement;
use PDO;
use PDOException;

/**
 * Creates Database object
 */
class Database
{

    public $config;
    /**
     * @var string
     */
    public string $dsn;
    /**
     * @var PDO
     */
    public PDO $connection;
    /**
     * @var
     */
    public $statement;

    /**
     * Constructor builds connection to DB
     */
    public function __construct()
    {
        $this->config = require base("config.php");

        $this->dsn = "mysql:host={$this->config['database']['host']};port=3306;dbname={$this->config['database']['dbname']};charset=UTF8";

        $this->connection = new PDO($this->dsn, $this->config['database']['user'], $this->config['database']['password'], [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    /**
     * Query's database
     * @param string $query
     * @param array $params
     * @return $this
     */
    public function query(string $query, $params = []): Database
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    /**
     * Returns all records from DB from query
     * @return mixed
     */
    public function findAll()
    {
        return $this->statement->fetchAll();
    }

    /**
     * Returns specific record from DB from query
     * @return mixed
     */
    public function find()
    {
        return $this->statement->fetch();
    }

    /**
     * Returns specific record from DB from query OR returns false if not found
     * @return false|mixed
     */
    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            return false;
        }

        return $result;
    }

    /**
     * Inserts user into DB
     * @param string $email
     * @param string $password
     * @param string|null $firstname
     * @param string|null $lastname
     * @return void
     */
    public function addUser(string $email, string $password, string $firstname = null, string $lastname = null)
    {
        $this->query("INSERT INTO users (firstname, lastname, password, email)
            VALUES (:firstname, :lastname, :password, :email)", [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'password' => $password,
            "email" => $email
        ]);
    }
}