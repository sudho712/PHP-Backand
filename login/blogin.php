<?php 
$servername = "localhost";
$username = "root";
$password = ""; // Use your password if any
$dbname = "php";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>