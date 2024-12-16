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

$sql = "SELECT name FROM cart_summary WHERE user_id = ?";
//$sql ="SELECT JSON_EXTRACT(cart_summary,'$name')AS name FROM orders";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch order data
$query = "SELECT id, email, pnum, firstName, lastName, deliveryAdd, city, notes, cart_summary, subtotal, created_at FROM orders"; // Adjust table name and field names if necessary
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
        body{
            margin: 0;
            padding: 0;
            background-color: #f8f4ec;
            font-family: 'Poppins', sans-serif;
        }
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
            border-radius: 30px;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }
        .logout-btn:hover {
            background-color: #4b2e24;
        }
        .btn-back {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 20px;
            font-size: 1.2rem;
            font-weight: 600;
            color: #fff;
            background-color: #6d4c41;
            border: none;
            border-radius: 30px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .btn-back:hover {
            background-color: #4e3629;
        }
    </style>
</head>
<body>
<a href="welcome.html" class="btn-back">Back to Dashboard</a>
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
                <th>Cost</th>
                <th>Cart Summary</th>
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
                        <td>" . htmlspecialchars($row['subtotal']) . "</td>
                        <td>" . htmlspecialchars(string: $row['cart_summary']) . " </td>
                        <td>" . htmlspecialchars($row['created_at']) . " </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='11'>No orders found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Logout Button -->
    <?php
    // Close the database connection
    $conn->close();
    ?>
</body>
</html>