<?php
session_start();
error_reporting(1);


require __DIR__ . '/../vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

class Database
{
    private static $instance;
    private $con;
    private $db_host;
    private $db_username;
    private $db_password;
    private $db_name;
    private $db_port;

    private function __construct()
    {
        $this->db_host = $_ENV['db_host'];
        $this->db_username = $_ENV['db_username'];
        $this->db_password = $_ENV['db_password'];
        $this->db_name = $_ENV['db_name'];
        $this->db_port = $_ENV['db_port'];

        $this->con = mysqli_connect($this->db_host, $this->db_username, $this->db_password, $this->db_name, $this->db_port);

        if (!$this->con) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->con;
    }
}

// Set the timezone
date_default_timezone_set('Asia/Manila');
