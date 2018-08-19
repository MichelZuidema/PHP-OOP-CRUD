<?php
/* Require the database class file */
require 'database.class.php';

/* Set db variable to connect to the database class */
$db = new Database();

/* Open the connect function in the $db class */
$db->Connect();