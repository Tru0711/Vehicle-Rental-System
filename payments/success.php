<?php
include("../config.php");
session_start();

if (!isset($_GET['payment_id'])) {
    header("Location: ../user/dashboard.php");
    exit();
}

$payment_id = $_GET['payment_id'];

// Update payment status to "Completed"
$query = "UPDATE payments SET status = 'Completed' WHERE id = '$payment_id'";
executeQuery($query);

// Get the booking ID associated with the payment
$query = "SELECT booking_id FROM payments WHERE id = '$payment_id'";
$result = executeQuery($query);
$row = mysqli_fetch_assoc($result);
$booking_id = $row['booking_id'];

// Update booking status to "Approved"
$query = "UPDATE bookings SET status = 'Approved' WHERE id = '$booking_id'";
executeQuery($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment Successful</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Payment Successful</h2>
        <p>Your payment has been processed successfully.</p>
        <a href="../user/dashboard.php">Return to Dashboard</a>
    </div>
</body>
</html>
