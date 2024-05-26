<?php
/** PDO (PHP Data Objects) */
// todo... use Docker to create a docker mysql data base and connect to it from the project!

$servername = "mysql_db";
$username = "your_user";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";