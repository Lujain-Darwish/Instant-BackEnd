<?php
// db_config.php
$host = "localhost"; 
$db_name = "furniture_db"; 
$username = "root"; 
$password = ""; 

// Create connection
$conn = new mysqli($host, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>