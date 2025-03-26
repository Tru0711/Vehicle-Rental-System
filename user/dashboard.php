<?php
include("../config.php");
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['user_name']; ?>!</h2>
        <nav>
            <ul>
                <li><a href="booking.php">Book a Vehicle</a></li>
                <li><a href="booking_history.php">Booking History</a></li>
                <li><a href="review.php">Submit a Review</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>
