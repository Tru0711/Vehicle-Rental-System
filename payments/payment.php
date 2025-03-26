<?php
include("../config.php");
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../user/login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $booking_id = $_POST['booking_id'];
    $amount = $_POST['amount'];

    // Insert payment record into the database
    $query = "INSERT INTO payments (booking_id, user_id, amount, status) VALUES ('$booking_id', '$user_id', '$amount', 'Pending')";
    $result = executeQuery($query);

    if ($result) {
        $payment_id = mysqli_insert_id($conn);
        // Simulate payment success (In real-world applications, integrate a payment gateway like PayPal or Stripe)
        header("Location: success.php?payment_id=" . $payment_id);
    } else {
        header("Location: failure.php");
    }
}
?>
