<?php

class Database {
    private $host     = "localhost",
            $username = "root",
            $password = "",
            $db       = "elang";
    
    public  $connection;

    public function connect_db() {
      $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->db) or die(mysqli_error());
    }

    public function __construct() {
      $this->connect_db();
    }
}