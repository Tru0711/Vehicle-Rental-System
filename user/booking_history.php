<?php include("../config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking History</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Booking History</h2>
        <table border="1">
            <tr>
                <th>Vehicle</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
            </tr>
            <?php
            $user_id = 1;  // Placeholder for session user ID
            $query = "SELECT b.*, v.name, v.model FROM bookings b JOIN vehicles v ON b.vehicle_id = v.id WHERE b.user_id = '$user_id'";
            $result = executeQuery($query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['name']." (".$row['model'].")</td>";
                echo "<td>".$row['start_date']."</td>";
                echo "<td>".$row['end_date']."</td>";
                echo "<td>".$row['status']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
