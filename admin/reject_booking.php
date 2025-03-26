<?php
include("../functions.php");
include("../config.php");

if (isset($_GET['id'])) {
    $booking_id = $_GET['id'];

    // Update the booking status to 'rejected'
    $query = "UPDATE bookings SET status='rejected' WHERE id='$booking_id'";
    if (executeQuery($query)) {
        // Optionally, send a notification to the user
        // You can implement email notification here if needed
        echo "Booking rejected successfully.";
    } else {
        echo "Error rejecting booking.";
    }
} else {
    echo "Invalid booking ID.";
}

// Redirect back to the manage bookings page
header("Location: manage_bookings.php");
exit();
?>