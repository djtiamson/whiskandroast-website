<?php
session_start();
include('db_connection.php'); // Ensure this file exists and creates a valid $conn object

$error_message = ""; // Initialize error message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepared statement to check credentials
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION['admin'] = $username; // Set session for admin
        header("Location: welcome.html"); // Redirect to admin dashboard
        exit;
    } else {
        $error_message = "INVALID CREDENTIALS! Check username and password.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Error</title>
    <style>
    body {
        margin: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color:rgb(239, 228, 214); /* Coffee-themed background */
        font-family: "Poppins", sans-serif;
        color: #7f5539; /* Coffee-themed text color */
    }
    .error-message {
        color:rgb(204, 19, 19);
        font-weight: 700;
        font-size: 26.5px;
        padding: 15px;
        border-radius: 5px;
        text-align: center;
        margin-bottom: 20px;
        width: 80%;
        max-width: 400px;
    }
    .back-button {
        color: #fff;
        background-color: #7f5539; /* Coffee button color */
        font-size: 16px;
        border: none;
        padding: 10px 20px;
        border-radius: 10px;
        cursor: pointer;
        text-align: center;
    }
    .back-button:hover {
        background-color: #6b4226; /* Darker shade for hover effect */
    }
    </style>
</head>
<body>
    <?php if (!empty($error_message)): ?>
        <div class="error-message">
            <?php echo htmlspecialchars($error_message); ?>
        </div>
    <?php endif; ?>
    <button class="back-button" onclick="window.location.href='login.html'">Back to Log In Page</button>
</body>
</html>