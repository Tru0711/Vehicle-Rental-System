<?php include("../functions.php"); 
include("../config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Bookings</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Manage Bookings</h2>
        <table border="1">
            <tr>
                <th>User</th>
                <th>Vehicle</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
            $query = "SELECT b.*, u.name AS user_name, v.name AS vehicle_name FROM bookings b
                      JOIN users u ON b.user_id = u.id
                      JOIN vehicles v ON b.vehicle_id = v.id";
            $result = executeQuery($query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>".$row['user_name']."</td>
                        <td>".$row['vehicle_name']."</td>
                        <td>".$row['start_date']."</td>
                        <td>".$row['end_date']."</td>
                        <td>".$row['status']."</td>
                        <td>
                            <a href='approve_booking.php?id=".$row['id']."'>Approve</a> | 
                            <a href='reject_booking.php?id=".$row['id']."'>Reject</a>
                        </td>
                      </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
