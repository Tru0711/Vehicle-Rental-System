<?php include("../functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Vehicles</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Manage Vehicles</h2>
        <form action="manage_vehicles.php" method="POST">
            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Model:</label>
            <input type="text" name="model" required>

            <label>Price per Day:</label>
            <input type="number" name="price" required>

            <button type="submit" name="add_vehicle">Add Vehicle</button>
        </form>

        <h3>Existing Vehicles</h3>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Model</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php
            $query = "SELECT * FROM vehicles";
            $result = executeQuery($query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>".$row['name']."</td>
                        <td>".$row['model']."</td>
                        <td>".$row['price']."</td>
                        <td><a href='delete_vehicle.php?id=".$row['id']."'>Delete</a></td>
                      </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

<?php
if (isset($_POST['add_vehicle'])) {
    $name = $_POST['name'];
    $model = $_POST['model'];
    $price = $_POST['price'];

    $query = "INSERT INTO vehicles (name, model, price, availability) VALUES ('$name', '$model', '$price', 'Available')";
    executeQuery($query);
    echo "<script>alert('Vehicle added successfully!'); window.location.href='manage_vehicles.php';</script>";
}
?>
