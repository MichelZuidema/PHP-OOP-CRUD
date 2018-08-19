<?php
/* Require the database class file */
require 'database.class.php';

/* Set db variable to connect to the database class */
$db = new Database();

/* Execute the connect function in the $db class */
$db->Connect();

/* Execute the create function */
$db->Create("INSERT INTO feedback (name, message, email) VALUES ('John Doe', 'test@test.com', 'test@gmail.com')");
// $ExampleQueryInsert = "INSERT INTO feedback (name, message, email) VALUES ('John Doe', 'test@test.com', 'test@gmail.com')";

/* Execute the read function */
$db->Read("SELECT * FROM feedback");

/* Execute the update function */
$db->Update("UPDATE feedback SET name='Michel Z' WHERE id=1");
// $ExampleQueryUpdate = "UPDATE feedback SET name='Michel Z' WHERE id=1";

/* Execute the delete function */
$db->Delete(2);
$ExampleQueryDelete = 2;

/* Open the close function */
$db->CloseConnection();