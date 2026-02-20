<?php

// Database configuration
$db_host = 'localhost'; // Database host
$db_user = 'username'; // Database username
$db_password = 'password'; // Database password
$db_name = 'database_name'; // Database name

// Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
echo 'Connected successfully';

?>