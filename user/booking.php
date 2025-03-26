<?php include("../config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vehicle Booking</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Book a Vehicle</h2>
        <form action="booking.php" method="POST">
            <label for="vehicle">Choose a Vehicle:</label>
            <select name="vehicle_id">
                <?php
                $query = "SELECT * FROM vehicles WHERE availability = 'Available'";
                $result = executeQuery($query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='".$row['id']."'>".$row['name']." (".$row['model'].") - $".$row['price']."/day</option>";
                }
                ?>
            </select>

            <label for="start_date">Start Date:</label>
            <input type="date" name="start_date" required>

            <label for="end_date">End Date:</label>
            <input type="date" name="end_date" required>

            <button type="submit" name="book">Book Now</button>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['book'])) {
    $user_id = 1;  // Placeholder, replace with session user ID
    $vehicle_id = $_POST['vehicle_id'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $query = "INSERT INTO bookings (user_id, vehicle_id, start_date, end_date, status) VALUES ('$user_id', '$vehicle_id', '$start_date', '$end_date', 'Pending')";
    executeQuery($query);
    echo "<script>alert('Booking request submitted!'); window.location.href='booking_history.php';</script>";
}
?>
