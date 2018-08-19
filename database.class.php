<?php

class Database {
    /* Database Credentials */
    private $host = "changeme";
    private $username = "changeme";
    private $password = "changeme";
    private $db = "changeme";
    public $connectionString;

    /* Connect Function */
    public function Connect() {
        /* Make Connection String */
        $this->connectionString = new mysqli($this->host, $this->username, $this->password, $this->db);

        /* Check if the connection has an error, if yes then output the error, else output Connected. */
        if($this->connectionString->connect_error) {
            echo "Connection Error: " . $this->connectionString->connect_error;
        } else {
            echo "Connected!" . "<br>";
        }
    }
    /* Create Function */
    public function Create($query) {
        /* Execute Query, if it's completed, output that data is inserted else the error. */
        if($this->connectionString->query($query) == TRUE) {
            echo "Data Inserted." . "<br>";
        } else {
            echo "Error: " . $query . "<br>" . $this->connectionString->error;
        }
    }
    /* Read Function */
    public function Read($query) {
        /* Execute $query */
        $result = $this->connectionString->query($query);
        /* If there are more than 0 rows then continue */
        if(mysqli_num_rows($result) > 0) {
            /* Using while function so it gets all the rows instead of 1. */
            while($row = mysqli_fetch_assoc($result)) {
                /* Put all the database data into variables */
                $id = $row['id'];
                $name = $row['name'];
                $message = $row['message'];
                $email = $row['email'];
                /* Output the data */
                echo "ID: " . $id . ". Name: " . $name . ". Message: " . $message . ". Email: " . $email . "." . "<br>";
            }
        }
    }
    /* Update Function */
    public function Update($query) {
        /* Execute query, if it's completed, ouput that data is updated else the error. */
        if($this->connectionString->query($query) == TRUE) {
            echo "Data Updated." . "<br>";
        } else {
            echo "Error updating" . $this->connectionString->error . "<br>";
        }
    }
    /* Delete Function */
    public function Delete($id) {
        /* Delete Query */
        $query = "DELETE FROM feedback WHERE id=" . $id;
        /* Execute query, if it's completed, output that record is deleted else the error. */
        if($this->connectionString->query($query) == TRUE) {
            echo "Record Deleted" . "<br>";
        } else {
            echo "Error Deleting" . $this->connectionString->error;
        }
    }
    /* Close Function */
    public function CloseConnection() {
        /* Close the mysqli connection */
        mysqli_close($this->connectionString);
    }
} 