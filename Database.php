<?php

class Database {
    private $username;
    private $password;
    private $host;
    private $database;
    public $conn = NULL;
    public function __construct()
    {
        $this->username = 'dbuser';
        $this->password = 'dbpwd';
        $this->host = 'db';
        $this->database = 'dbname';
    }
    public function connect()
    {
        try {
            $conn = new PDO(
                "pgsql:host=$this->host;port=5432;dbname=$this->database",
                $this->username,
                $this->password,
                ["sslmode"  => "prefer"]
            );

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}