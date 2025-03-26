<?php include("../config.php"); 
include("../functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment Records</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Payment Records</h2>
        <table border="1">
            <tr>
                <th>Payment ID</th>
                <th>Booking ID</th>
                <th>User ID</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
            <?php
            $query = "SELECT * FROM payments";
            $result = executeQuery($query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['booking_id']."</td>
                        <td>".$row['user_id']."</td>
                        <td>".$row['amount']."</td>
                        <td>".$row['status']."</td>
                        <td>".$row['created_at']."</td> <!-- Assuming you have a created_at field -->
                      </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>