<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "whisk_and_roast";

$conn = new mysqli($host, $username, $password, $database); //eto ok na toh

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form data is submitted via POST 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get input data from the form //here magsstart papalitan nyo na lang names after sa post tas dagdagan na lang
    $name = $conn->real_escape_string($_POST['name']);
    $rating = $conn->real_escape_string($_POST['rating']);
    $comment = $conn->real_escape_string($_POST['comment']);

    // Validate the input
    if (!empty($name) && !empty($rating) && !empty($comment)) {
        // Prepare SQL query to insert data into the database
        $sql = "INSERT INTO reviews (name, rating, comment) VALUES ('$name', '$rating', '$comment')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(["success" => true, "message" => "Review saved successfully."]);
        } else {
            echo json_encode(["success" => false, "message" => "Error: " . $conn->error]);
        }
    } else {
        echo json_encode(["success" => false, "message" => "All fields are required."]);
    }
}

$conn->close();
?>
