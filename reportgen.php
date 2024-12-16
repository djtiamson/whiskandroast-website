<?php
header('Content-Type: application/json');

// Database connection
$host = "localhost";
$username = "root"; // Replace with your database username
$password = "";     // Replace with your database password
$database = "whisk_and_roast"; // Replace with your database name

$conn = new mysqli($host, $username, $password, $database);

// Check the database connection
if ($conn->connect_error) {
    echo json_encode(["success" => false, "message" => "Database connection failed: " . $conn->connect_error]);
    exit();
}

// Fetch data for graph (e.g., count of orders by city)
$query = "SELECT city, COUNT(*) AS orders FROM orders GROUP BY city";
$result = $conn->query($query);

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Return the data in JSON format
echo json_encode($data);

// Close the database connection
$conn->close();
?>
