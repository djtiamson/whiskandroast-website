<?php
// Start session (for logout functionality)
session_start();

// Database connection
$host = "localhost"; // Replace with your server details
$username = "root";    // Replace with your database username
$password = "";    // Replace with your database password
$dbname = "whisk_and_roast";      // Replace with your database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch order data
$query = "SELECT id, email, pnum, firstName, lastName, deliveryAdd, city, notes, created_at FROM custinfo"; // Adjust table name and field names if necessary
$result = $conn->query($query);

// Logout functionality (if session exists, destroy it)
if (isset($_POST['logout'])) {
    session_destroy(); // Destroy session
    header("Location: login.html"); // Redirect to login page after logout
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHISK AND ROAST ORDER SUMMARY</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
        }
        .logout-btn {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #4b2e24;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }
        .logout-btn:hover {
            background-color: #4b2e24;
        }
    </style>
</head>
<body>
    <h1>WHISK AND ROAST ORDER SUMMARY</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Delivery Address</th>
                <th>City</th>
                <th>Notes</th>
                <th>Order Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . htmlspecialchars($row['id']) . "</td>
                        <td>" . htmlspecialchars($row['email']) . "</td>
                        <td>" . htmlspecialchars($row['pnum']) . "</td>
                        <td>" . htmlspecialchars($row['firstName']) . "</td>
                        <td>" . htmlspecialchars($row['lastName']) . "</td>
                        <td>" . htmlspecialchars($row['deliveryAdd']) . "</td>
                        <td>" . htmlspecialchars($row['city']) . "</td>
                        <td>" . htmlspecialchars($row['notes']) . "</td>
                        <td>" . htmlspecialchars($row['created_at']) . "</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No orders found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Logout Button -->
    <form method="POST">
        <button type="submit" name="logout" class="logout-btn">Logout</button>
    </form>

    <?php
    // Close the database connection
    $conn->close();
    ?>
</body>
</html>



