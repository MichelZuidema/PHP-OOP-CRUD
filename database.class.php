<?php

class Database {
    /* Database Credentials */
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "php-oop";
    public $connectionString;

    /* Connect Function */
    public function Connect() {
        /* Make Connection String */
        $this->connectionString = new mysqli($this->host, $this->username, $this->password, $this->db);

        /* Check if the connection has an error, if yes then output the error, else output Connected. */
        if($this->connectionString->connect_error) {
            echo "Connection Error: " . $this->connectionString->connect_error;
        } else {
            echo "Connected";
        }
    }
} 