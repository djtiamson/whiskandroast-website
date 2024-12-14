<?php
$host = "localhost";
$username = "root";
$password = ""; // Default XAMPP password
$dbname = "whisk_and_roast";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>