<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "address_book";

// Creating connection
$connection = new mysqli($server, $username, $password, $dbname);

// Checking the connection is working properly or not
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>