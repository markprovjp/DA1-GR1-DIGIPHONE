<?php
namespace models;

use PDO;

class BaseModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=" . DB_HOST . "; dbname=" . DB_NAME . "", DB_USER, DB_PASS);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
}