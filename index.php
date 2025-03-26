<?php include("includes/header.php"); ?>
<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vehicle Rental System</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include("includes/navbar.php"); ?>

    <div class="container">
        <h2>Welcome to the Vehicle Rental System</h2>
        <p>Find and rent the best vehicles at the best prices.</p>

        <h3>Available Vehicles</h3>
        <div class="vehicle-list">
            <?php
            $query = "SELECT * FROM vehicles WHERE availability = 'Available'";
            $result = executeQuery($query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='vehicle'>";
                echo "<img src='assets/images/" . $row['image'] . "' alt='" . $row['name'] . "'>";
                echo "<h4>" . $row['name'] . " (" . $row['model'] . ")</h4>";
                echo "<p>Price: $" . $row['price'] . "/day</p>";
                echo "<a href='user/booking.php?id=" . $row['id'] . "'>Rent Now</a>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <?php include("includes/footer.php"); ?>
</body>
</html>
