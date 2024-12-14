<?php
// Database connection details
$host = 'localhost'; // Database host
$username = 'root';  // Database username
$password = '';      // Database password
$database = 'whisk_and_roast'; // Database name

// Connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data from the POST request
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Validate that all fields are filled
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo "All fields are required!";
    exit;
}

// Sanitize input to prevent SQL injection
$name = $conn->real_escape_string($name);
$email = $conn->real_escape_string($email);
$subject = $conn->real_escape_string($subject);
$message = $conn->real_escape_string($message);

// Insert the data into the database
$sql = "INSERT INTO contact_form_submissions (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    // Send email after successful database insert
    $to = "yssacgudalle@gmail.com"; // Replace with your email address
    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "
    You have received a new message from the contact form:

    Name: $name
    Email: $email
    Subject: $subject
    Message:
    $message
    ";

    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending email!";
    }
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>

