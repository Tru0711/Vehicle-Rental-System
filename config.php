<?php
$host = "localhost";
$user = "root";  // Default XAMPP user
$password = "root";  // Default XAMPP password (empty)
$database = "vehicle_rental_db";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
