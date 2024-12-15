<?php
header('Content-Type: application/json');

// Database connection
$host = "localhost";
$username = "root"; // Replace with your database username
$password = "";     // Replace with your database password
$database = "whisk_and_roast"; // Replace with your actual database name

$conn = new mysqli($host, $username, $password, $database);

// Check the database connection
if ($conn->connect_error) {
    echo json_encode(["success" => false, "message" => "Database connection failed: " . $conn->connect_error]);
    exit();
}

// Retrieve form data from POST request
$email = $_POST['email'] ?? '';
$pnum = $_POST['pnum'] ?? '';
$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$deliveryAdd = $_POST['deliveryAdd'] ?? '';
$city = $_POST['city'] ?? '';
$notes = $_POST['notes'] ?? '';
$cart_summary = $_POST['cartSummary']; // JSON string of cart items
$subtotal = $_POST['subtotal'];

// Prepare an SQL statement to insert the data into the table
$sql = "INSERT INTO custinfo (email, pnum, firstName, lastName, deliveryAdd, city, notes, cart_summary, subtotal) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("sssssss", $email, $pnum, $firstName, $lastName, $deliveryAdd, $city, $notes);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Order placed successfully!"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error: " . $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(["success" => false, "message" => "Error preparing statement: " . $conn->error]);
}

// Close the database connection
$conn->close();
?>









