<?php
include("../functions.php"); // Include the functions file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Encrypt password

    // Check if email already exists
    $check_query = "SELECT * FROM users WHERE email = '$email'";
    $check_result = executeQuery($check_query);

    if (mysqli_num_rows($check_result) > 0) {
        echo "<script>alert('Email already registered!'); window.location.href='register.php';</script>";
    } else {
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        if (executeQuery($query)) {
            echo "<script>alert('Registration successful! Please log in.'); window.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Registration failed. Please try again.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="register.php" method="POST">
            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>