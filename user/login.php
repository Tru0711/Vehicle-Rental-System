<?php
include("../functions.php"); // Include the functions file
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Prepare the query to fetch the user
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = executeQuery($query);
    $user = mysqli_fetch_assoc($result);

    // Verify user credentials
    if ($user && password_verify($password, $user['password'])) {
        // Set session variables
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['role'] = $user['role'];
        header("Location: dashboard.php");
        exit(); // Always exit after a header redirect
    } else {
        echo "<script>alert('Invalid email or password!'); window.location.href='login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</body>
</html>