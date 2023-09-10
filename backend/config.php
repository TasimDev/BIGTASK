<?php
class Config
{
    private const DBhost = 'localhost';
    private const DBuser = 'root';
    private const DBpass = '';
    private const DBname = 'mega_db';

    private $dsn = 'mysql:host=' . self::DBhost . ';dbname=' . self::DBname . '';
    protected $conn = null;

    //MEthod for connection to the database

    public function __construct()
    {
        try {
            $this->conn = new PDO($this->dsn, self::DBuser, self::DBpass);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            echo 'Success';
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}

$ob = new Config;
?>